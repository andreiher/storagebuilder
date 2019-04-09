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

    <h3>@lang("messages.control_card")</h3>

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
                <label for="date_inceput">@lang("messages.extra_information_label") </label>
                <textarea name="extra_info" id="extra_info" class="form-control" rows="5">{{ old('extra_info') }}</textarea>
            </div>
        </div>
    </div>

    <br/>

    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn btn-default prevstep">@lang("messages.back")</button>
        </div>
        <div class="col-md-6 text-right">
            <button type="button" class="btn btn-primary nextstep">@lang("messages.continue")</button>
        </div>
    </div>
</div>    
