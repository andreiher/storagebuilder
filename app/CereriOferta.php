<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CereriOferta extends Model
{
    public $table = "cereri_oferta";
    //
    public $fillable = [
        'destinatie_cladire',
        'lungime',
        'latime',
        'inaltime',
        'suprafata_totala',
        'panta_acoperis',
        'prenume',
        'firma',
        'email',
        'nume',
        'telefon',
        'fax',
        'avize_autorizatii',
        'teren_disponibil',
        'finantare',
        'localitate',
        'data_inceput',
        'data_sfarsit',
    ];

}