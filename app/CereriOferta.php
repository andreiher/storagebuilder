<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CereriOferta extends Model
{
    public $table = "cereri_oferta";
    //

    protected $casts = [
        'trape_fum' => 'array',
        'ferestre' => 'array',
        'usi_sectionale' => 'array',
        'usi_pietonale' => 'array',
        'rampe_acces_tir' => 'array',
    ];

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

        'tip_structura',
        'culoare',
        'suprafata_construita',
        'sistem_pluvial',
        'mezanin',
        'mezanin_suprafata',
        'copertina',
        'copertina_suprafata',
        'pod_rulant',
        'pod_rulant_sarcina',
        'cladire_izolata',
        'tip_acoperis',
        'tip_acoperis-grosime-vata',
        'tip_acoperis-tip_membrana',
        'tip_acoperis-grosime-membrana',
        'tip_acoperis-panou-sandwich-spuma-tip',
        'tip_acoperis-grosime',
        'tip_pereti',
        'tip_pereti-grosime',
        'trape_fum',
        'ferestre',
        'usi_sectionale',
        'usi_pietonale',
        'rampe_acces_tir',
        'extra_info',

        'project_file',
    ];

}