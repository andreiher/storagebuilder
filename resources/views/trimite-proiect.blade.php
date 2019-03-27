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
        <h1>Cererea dumneavoastra</h1>
        <p>Va rugam sa completatio formularul de mai jos: </p>

        <br/>

        <h3>Date de identificare</h3>

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="prenume">Prenume*</label>
                    <input type="text" id="prenume" name="prenume" class="form-control" tabindex="1" value="{{ old('prenume') }}">
                </div>
                <div class="form-group">
                    <label for="firma">Firma*</label>
                    <input type="text" id="firma" name="firma" required class="form-control" tabindex="3" value="{{ old('firma') }}">
                </div>
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="email" required class="form-control" tabindex="5" value="{{ old('email') }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="nume">Nume*</label>
                    <input type="text" id="nume" name="nume" required class="form-control"  tabindex="2" value="{{ old('nume') }}">
                </div>
                <div class="form-group">
                    <label for="telefon">Telefon*</label>
                    <input type="tel" id="telefon" name="telefon" required class="form-control" tabindex="4" value="{{ old('telefon') }}">
                </div>
                <div class="form-group">
                    <label for="fax">Fax</label>
                    <input type="text" id="fax" name="fax" class="form-control" tabindex="6" value="{{ old('fax') }}">
                </div>
            </div>

        </div>

        <br/>

        <h3>Fisa de control</h3>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group"> <!--bootstrap styling-->
                    <label><input type="checkbox" value="1" name="teren_disponibil" {{ old("teren_disponibil") == "1" ? 'checked="checked"' : ''}}> Terenul pentru constructie este disponibil.</label>
                </div>
                <div class="form-group"> <!--bootstrap styling-->
                    <label><input type="checkbox" value="1" name="avize_autorizatii" {{ old("avize_autorizatii") == "1" ? 'checked="checked"' : ''}}> Avizele si autorizatiile au fost obtinute.</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group"> <!--bootstrap styling-->
                    <label><input type="checkbox" value="1" name="finantare" {{ old("finantare") == "1" ? 'checked="checked"' : ''}}> Exista finantare pentru acest obiectiv.</label>
                </div>
                <div class="form-group">
                    <label for="localitate">Localitate constructie</label>
                    <input type="text" id="localitate" name="localitate" required class="form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Fisier Proiect:</label>
                    <input type="file" name="project_file">
                    <p><small>Sunt acceptate numai fisierele de tip doc, docx, pdf, rtf, dxf, jpg, png</small></p>
                </div>
            </div>
        </div>

        <h3>Asteptarile dumneavoastra</h3>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="date_inceput">Sa incepem proiectul la data de </label>
                    <input type="text" id="data_inceput" name="data_inceput" class="form-control" value="{{ old('data_inceput') }}">
                </div>
                <div class="form-group">
                    <label for="date_sfarsit">Sa se finalizeze proiectul la data de </label>
                    <input type="text" id="data_sfarsit" name="data_sfarsit" class="form-control" value="{{ old('data_sfarsit') }}">
                </div>
            </div>
        </div>

        <br/>

        <div class="row">

            <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary">Trimite cerere</button>
            </div>
        </div>

    </form>
@endsection

@section('scripts')
    @parent
    <script type="text/javascript">
        $(function() {
            $("form").validate({
                rules: {
                    nume: "required",
                    prenume: "required",
                    firma: "required",
                    project_file: {
                        required: true,
                        extension: "doc|docx|pdf|rtf|dxf|jpg|png"
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
