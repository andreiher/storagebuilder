@extends('layouts.main')

@section('content')
    <h2>@lang('messages.what_can_we_help_you_with')</h2>
    <br/>
    <div class="row">
        <div class="col-md-6">
            <div class="jumbotron">
                <h4>@lang('messages.offer_without_design_title')</h4>
                <hr class="my-4">
                <p>@lang('messages.offer_without_design_text')</p>
                <a class="btn btn-primary btn-lg" href="{{ route("configurator") }}" role="button">@lang('messages.offer_without_design_button')</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="jumbotron">
                <h4>@lang('messages.offer_with_design_title')</h4>
                <hr class="my-4">
                <p>@lang('messages.offer_with_design_text')</p>
                <a class="btn btn-primary btn-lg" href="{{ route("trimite-proiect") }}" role="button">@lang('messages.offer_with_design_button')</a>
            </div>
        </div>
    </div>
@endsection
