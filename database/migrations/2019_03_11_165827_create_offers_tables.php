<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cereri_oferta', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nume');
            $table->string('prenume');
            $table->string('firma');
            $table->string('email');
            $table->string('telefon');
            $table->string('fax');

            $table->string('destinatie_cladire');
            $table->string('lungime');
            $table->string('latime');
            $table->string('inaltime');
            $table->string('suprafata_totala');
            $table->string('panta_acoperis');

            $table->smallInteger('teren_disponibil')->default("0");
            $table->smallInteger('avize_autorizatii')->default("0");
            $table->smallInteger('finantare')->default("0");
            $table->string('localitate');
            $table->string('data_inceput');
            $table->string('data_sfarsit');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cereri_oferta');
    }
}
