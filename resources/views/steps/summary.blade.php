@extends('layouts.main')

@section('content')
<h1>Cererea dumneavoastra</h1>
<p>Va rugam sa confirmati datele introduse</p>
<p>Dupa trimiterea lor va vom contacta in cel mai scurt timp</p>

<br/>

<div class="row">
    <div class="col-md-6">
        <h3>Date de identificare</h3>
        <p>Ioan Popescu</p>
        <p> Exemplu SRL</p>
        <p><i class="far fa-envelope"></i> ioan.popescu@exemplu.ro<p>
        <p><i class="fas fa-phone"></i> 07465123123<p>
    </div>
    <div class="col-md-6">
        <h3>Obiectiv</h3>
        <p>Hala productie</p>
        <p>Suprafata:2500 m<sup>2</sup></p>
        <p>Data inceperi proiectului: 5 Martie 2019</p>
        <p>Data livrarii proiectului: 30 Septembrie 2019</p>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-6">
        <h3>Detalii</h3>
        <p>Lungime: 100m </p>
        <p>Latime: 25m </p>
        <p>Inaltime: 7.5 m </p>
        <p>Tip acoperis: plat </p>
        <p>Numar usi: 3 </p>
    </div>
    <div class="col-md-6">
        <p>Snapshot here </p>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <p><i class="fas fa-check"></i> Terenul pentru constructie este disponibil</p>
        <p><i class="fas fa-check"></i> Avizele si autorizatiile au fost obtinute</p>
    </div>
    <div class="col-md-6">
        <p><i class="fas fa-check"></i> Exista finantare pentru acest obiectiv</p>
        <p><i class="fas fa-check"></i> Proiectul de arhitectura este gata</p>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-6">
        <a href="/step2" class="btn btn-default">Inapoi</a>
    </div>
    <div class="col-md-6">
        <form method="post" action="/request_offer">
            {{csrf_field()}}
            <button type="submit" class="btn btn-primary">Trimite cererea</button>
        </form>
    </div>
</div>
@endsection
