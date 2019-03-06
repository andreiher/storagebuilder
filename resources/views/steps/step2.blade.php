@extends('layouts.main')

@section('content')
<h1>Cererea dumneavoastra</h1>
<p>Va rugam sa completatio formularul de mai jos: </p>

<br/>

<form method="post" action="/summary">
    {{csrf_field()}}
    <h3>Date de identificare</h3>

    <div class="row">

        <div class="col-md-6">
           <div class="form-group">
                <label for="prenume">Prenume*</label>
                <input type="text" id="prenume" name="prenume" required class="form-control"> 
           </div> 
           <div class="form-group">
                <label for="firma">Firma*</label>
                <input type="text" id="firma" name="firma" required class="form-control">
           </div> 
           <div class="form-group">
                <label for="email">Email*</label>
                <input type="email" id="email" name="email" required class="form-control">
           </div> 
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="nume">Nume*</label>
                <input type="text" id="nume" name="nume" required class="form-control">
           </div> 
           <div class="form-group">
                <label for="telefon">Telefon*</label>
                <input type="tel" id="telefon" name="telefon" required class="form-control"> 
           </div> 
           <div class="form-group">
                <label for="fax">Fax</label>
                <input type="text" id="fax" name="fax" class="form-control">
           </div> 
        </div>

    </div>

    <br/>

    <h3>Fisa de control</h3>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group"> <!--bootstrap styling-->
                <label><input type="checkbox" value="1" name="teren_disponibil"> Terenul pentru constructie este disponibil.</label>
            </div>
            <div class="form-group"> <!--bootstrap styling-->
                <label><input type="checkbox" value="1" name="avize_autorizatii"> Avizele si autorizatiile au fost obtinute.</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group"> <!--bootstrap styling-->
                <label><input type="checkbox" value="1" name="finantare"> Exista finantare pentru acest obiectiv.</label>
            </div>
            <div class="form-group">
                <label for="localitate">Localitate constructie</label>
                <input type="text" id="localitate" name="localitate" required class="form-control">
           </div> 
        </div>
    </div>

    <h3>Asteptarile dumneavoastra</h3>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="date_inceput">Sa incepem proiectul la data de </label>
                <input type="date" min="{{date('Y-m-d')}}" id="data_inceput" name="data_inceput" class="form-control">
            </div>
            <div class="form-group">
                <label for="date_sfarsit">Sa se finalizeze proiectul la data de </label>
                <input type="date" min="{{date('Y-m-d')}}" id="data_sfarsit" name="data_sfarsit" class="form-control">
            </div>    
        </div>
    </div>

    <br/>

    <div class="row">
        <div class="col-md-6">
            <a href="/step1" class="btn btn-default">Inapoi</a>
        </div>
        <div class="col-md-6 text-right">
            <button type="submit" class="btn btn-primary">Continua</button>
        </div>
    </div>
</div>    
</form>


@endsection
