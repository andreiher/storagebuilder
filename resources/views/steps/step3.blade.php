@extends('layouts.main')

@section('content')
<h1>Informatii despre cladire</h1>
<p>Va rugam sa completati formularul de mai jos: </p>
<br/>

<form method="post" action="/summary">
    {{csrf_field()}}

    <div class="row">
        <div class="col-md-6">
            <form method="post" action="/step2">
            {{csrf_field()}}

                <div class="form-group">
                    <label for="type">Destinatie cladire</label>
                    <select class="form-control" id="type">
                        <option value="hala_productie">Hala productie</option>
                        <option value="hala_logistica">Hala logistica</option>
                        <option value="depozit">Depozit</option>
                        <option value="centru_administrativ">Centru administrativ</option>
                        <option value="sala_de_sport">Sala de sport</option>
                        <option value="altele">Altele</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="lungime">Lungime</label>
                    <input type="text" class="form-control" id="lungime" placeholder="Lungime cladire">
                    <div role="group" class="btn-group autofill-length">
                        <button type="button" class="btn btn-primary" data-value="18">18m</button>
                        <button type="button" class="btn btn-primary" data-value="24">24m</button>
                        <button type="button" class="btn btn-primary" data-value="30">30m</button>
                        <button type="button" class="btn btn-primary" data-value="36">36m</button>
                        <button type="button" class="btn btn-primary" data-value="42">42m</button>
                        <button type="button" class="btn btn-primary" data-value="48">48m</button>
                    </div>
                </div>

                <div class="form-group">
                    <label for="latime">Latime</label>
                    <input type="text" class="form-control" id="latime" placeholder="Latime cladire">
                    <div class="btn-group autofill-width" role="group">
                        <button type="button" class="btn btn-primary" data-value="12">12m</button>
                        <button type="button" class="btn btn-primary" data-value="14">14m</button>
                        <button type="button" class="btn btn-primary" data-value="16">16m</button>
                        <button type="button" class="btn btn-primary" data-value="18">18m</button>
                        <button type="button" class="btn btn-primary" data-value="20">20m</button>
                        <button type="button" class="btn btn-primary" data-value="22">22m</button>
                    </div>
                </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="inaltime">Inaltime</label>
                <input type="text" class="form-control" id="inaltime" placeholder="Inaltime cladire">
                <div class="btn-group autofill-height" role="group">
                    <button type="button" class="btn btn-primary" data-value="5">5m</button>
                    <button type="button" class="btn btn-primary" data-value="7.5">7.5m</button>
                    <button type="button" class="btn btn-primary" data-value="10">10m</button>
                    <button type="button" class="btn btn-primary" data-value="12.5">12.5m</button>
                </div>
            </div>

            <div class="form-group">
                <label for="suprafata_totala">Suprafata totala</label>
                <input type="text" class="form-control" id="suprafata_totala" placeholder="Suprafata totala">
            </div>

            <div class="form-group">
                <label for="panta_acoperis">Panta acoperis</label>
                <select class="form-control" id="panta_acoperis">
                    <option value="mic">Mai mica de 5%</option>
                    <option value="mare">Mai mare de 5%</option>
                </select>
            </div>
        </div>
    </div>

    <br/>

    <div class="row">
        <div class="col-md-6">
            <a href="{{ route("home") }}" class="btn btn-default">Inapoi</a>
        </div>
        <div class="col-md-6 text-right">
            <button type="submit" class="btn btn-primary">Continua</button>
        </div>
    </div>
</div>    
</form>


@endsection
