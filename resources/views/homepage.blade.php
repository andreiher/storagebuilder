@extends('layouts.main')

@section('content')
    <h2>How can we help you with?</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="jumbotron">
                <h4>I would like an offer, but i do not have a design.</h4>
                <hr class="my-4">
                <p>No problem, you can use our building design generator by clicking the link below</p>
                <a class="btn btn-primary btn-lg" href="step-1.html" role="button">Start Designing</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="jumbotron">
                <h4>I would like an offer, and i have the design.</h4>
                <hr class="my-4">
                <p>Complete the following form and we will send you an offer.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Send designs</a>
            </div>
        </div>
    </div>
@endsection
