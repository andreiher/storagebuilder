@extends('layouts.main')

@section('content')
    <h2>Cu ce va putem ajuta?</h2>
    <br/>
    <div class="row">
        <div class="col-md-6">
            <div class="jumbotron">
                <h4>As dori o oferta, dar nu am proiectul de arhitectura.</h4>
                <hr class="my-4">
                <p>Nici o problema, puteti folosi configuratorul nostru apasand butonul de mai jos.</p>
                <a class="btn btn-primary btn-lg" href="{{ route("configurator") }}" role="button">Incepeti proiectarea</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="jumbotron">
                <h4>As dori o oferta si am proiectul de arhitectura.</h4>
                <hr class="my-4">
                <p>Va rugam sa completati urmatorul formular si va vom trimite o oferta in cel mai scurt timp.</p>
                <a class="btn btn-primary btn-lg" href="{{ route("trimite-proiect") }}" role="button">Trimiteti proiectul</a>
            </div>
        </div>
    </div>
@endsection
