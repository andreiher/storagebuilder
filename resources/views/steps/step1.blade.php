@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <form method="post" action="/step2">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="type">Type</label>
                    <select class="form-control" id="type">
                        <option value="production">Production</option>
                        <option value="storage">Storage</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="length">Length</label>
                    <input type="text" class="form-control" id="length" placeholder="Building Length">
                    <div role="group" class="btn-group autofill-length">
                        <button type="button" class="btn btn-primary" data-value="50">50m</button>
                        <button type="button" class="btn btn-primary" data-value="100">100m</button>
                        <button type="button" class="btn btn-primary" data-value="150">150m</button>
                        <button type="button" class="btn btn-primary" data-value="200">200m</button>
                        <button type="button" class="btn btn-primary" data-value="250">250m</button>
                    </div>
                </div>

                <div class="form-group">
                    <label for="width">Width</label>
                    <input type="text" class="form-control" id="width" placeholder="Building Width">
                    <div class="btn-group autofill-width" role="group">
                        <button type="button" class="btn btn-primary" data-value="10">10m</button>
                        <button type="button" class="btn btn-primary" data-value="15">15m</button>
                        <button type="button" class="btn btn-primary" data-value="20">20m</button>
                        <button type="button" class="btn btn-primary" data-value="25">25m</button>
                        <button type="button" class="btn btn-primary" data-value="30">30m</button>
                    </div>
                </div>

                <div class="form-group">
                    <label for="height">Height</label>
                    <input type="text" class="form-control" id="height" placeholder="Building Width">
                    <div class="btn-group autofill-height" role="group">
                        <button type="button" class="btn btn-primary" data-value="5">5m</button>
                        <button type="button" class="btn btn-primary" data-value="7.5">7.5m</button>
                        <button type="button" class="btn btn-primary" data-value="10">10m</button>
                        <button type="button" class="btn btn-primary" data-value="12.5">12.5m</button>
                    </div>
                </div>

                <div class="form-group">
                    <label for="area">Building Area</label>
                    <input type="text" class="form-control" id="area" placeholder="Building Area">
                </div>

                <div class="form-group">
                    <label for="roofType">Roof type</label>
                    <select class="form-control" id="roofType">
                        <option value="flat">Flat</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            <h4>Preview</h4>
            <img src="images/generator.jpg" alt="3D generated preview" class="img-fluid" style="width:100%;">
        </div>
    </div>
@endsection
