@extends('layouts.main')

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route("trimite-proiect-proceseaza") }}" enctype="multipart/form-data">
        {{csrf_field()}}
        <h1>@lang("messages.your_request")</h1>
        <p>@lang("messages.your_request_text")</p>

        <br/>

        <h3>@lang("messages.identification_data")</h3>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="firma">@lang("messages.company")*</label>
                    <input type="text" id="firma" name="firma" required class="form-control" tabindex="3" value="{{ old('firma') }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email">@lang("messages.email")*</label>
                    <input type="email" id="email" name="email" required class="form-control" tabindex="5" value="{{ old('email') }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="telefon">@lang("messages.phone")*</label>
                    <input type="tel" id="telefon" name="telefon" required class="form-control" tabindex="4" value="{{ old('telefon') }}">
                </div>
            </div>

        </div>

        <br/>

        <h3>Fisa de control</h3>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group"> <!--bootstrap styling-->
                    <label><input type="checkbox" value="1" name="teren_disponibil" {{ old("teren_disponibil") == "1" ? 'checked="checked"' : ''}}> @lang("messages.building_land_available").</label>
                </div>
                <div class="form-group"> <!--bootstrap styling-->
                    <label><input type="checkbox" value="1" name="avize_autorizatii" {{ old("avize_autorizatii") == "1" ? 'checked="checked"' : ''}}> @lang("messages.authorizations_obtained").</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group"> <!--bootstrap styling-->
                    <label><input type="checkbox" value="1" name="finantare" {{ old("finantare") == "1" ? 'checked="checked"' : ''}}> @lang("messages.financing_available").</label>
                </div>
                <div class="form-group">
                    <label for="localitate">@lang("messages.building_locality")</label>
                    <input type="text" id="localitate" name="localitate" required class="form-control">
                </div>
            </div>

            <div class="col-md-12 mt-3 mb-3">
                <div class="form-group">
                    <label>@lang("messages.project_files")</label>
                    <input type="file" name="project_file">
                    <p><small>@lang("messages.project_files_notes")</small></p>
                </div>
            </div>
        </div>

        <h3>@lang("messages.your_expectations")</h3>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="date_inceput">@lang("messages.project_start_date") </label>
                    <input type="text" id="data_inceput" name="data_inceput" class="form-control" value="{{ old('data_inceput') }}">
                </div>
                <div class="form-group">
                    <label for="date_sfarsit">@lang("messages.project_end_date") </label>
                    <input type="text" id="data_sfarsit" name="data_sfarsit" class="form-control" value="{{ old('data_sfarsit') }}">
                </div>
            </div>
        </div>

        <h3>@lang("messages.extra_information")</h3>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="date_inceput">@lang("messages.extra_information") </label>
                    <textarea name="extra_info" id="extra_info" class="form-control" rows="5">{{ old('extra_info') }}</textarea>
                </div>
            </div>
        </div>

        <br/>

        <div class="row">

            <div class="col-md-12 text-right">
                <label class="mr-4">@lang("messages.terms-and-conditions") <input id="terms_and_conditions" type="checkbox" value="1"> </label>
                <button type="submit" disabled="disabled" class="btn btn-primary">@lang("messages.submit")</button>
            </div>
        </div>

    </form>
@endsection

@section('scripts')
    @parent
    <script type="text/javascript">
        $(function() {
            $("#terms_and_conditions").on("click", function() {
                var button = $('form button[type="submit"]');
                if(!$(this).is(":checked")) {
                    button.attr("disabled", true);
                    button.prop("disabled", true);
                } else {
                    button.attr("disabled", false);
                    button.prop("disabled", false);
                }
            });
            $("form").validate({
                rules: {
                    firma: "required",
                    telefon: "required",
                    project_file: {
                        required: true,
                        extension: "doc|docx|pdf|rtf|dxf|jpg|png|zip|rar"
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    localitate: "required",
                    data_inceput: "required",
                    data_sfarsit: "required",
                }
            });

            // initiaza pluginul "datepicker" pentru selectia datelor
            // iar la evenimentul changeDate (cand se selecteaza o data noua in formular)
            // seteaza valoarea inputului #data_sfarsit, luna urmatoare fata de #data_inceput
            $('#data_inceput').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true,
                startDate: '0',
                container: $("#data_inceput").parent(),
                orientation: "top left"
            }).on("changeDate",function(e){
                var newdate=e.date;
                newdate.setMonth(newdate.getMonth()+1);
                $("#data_sfarsit").datepicker("setStartDate",newdate).datepicker("update",newdate)
            });

            // initiaza pluginul "datepicker" pentru selectia datelor
            $('#data_sfarsit').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true,
                startDate: '0',
                container: $("#data_sfarsit").parent(),
                orientation: "top left"
            });
        })
    </script>
@endsection
