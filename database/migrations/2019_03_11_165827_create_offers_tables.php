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

            $table->string('nume')->nullable();
            $table->string('prenume')->nullable();
            $table->string('firma')->nullable();
            $table->string('email')->nullable();
            $table->string('telefon')->nullable();
            $table->string('fax')->nullable();

            $table->string('destinatie_cladire')->nullable();
            $table->string('lungime')->nullable();
            $table->string('latime')->nullable();
            $table->string('inaltime')->nullable();
            $table->string('suprafata_totala')->nullable();
            $table->string('panta_acoperis')->nullable();

            $table->smallInteger('teren_disponibil')->default("0");
            $table->smallInteger('avize_autorizatii')->default("0");
            $table->smallInteger('finantare')->default("0");

            $table->string('localitate')->nullable();
            $table->string('data_inceput')->nullable();
            $table->string('data_sfarsit')->nullable();

            $table->string('tip_structura')->nullable();
            $table->string('culoare')->nullable();
            $table->string('suprafata_construita')->nullable();
            $table->string('sistem_pluvial')->nullable();
            $table->string('mezanin')->nullable();
            $table->string('mezanin_suprafata')->nullable();
            $table->string('copertina')->nullable();
            $table->string('copertina_suprafata')->nullable();
            $table->string('pod_rulant')->nullable();
            $table->string('pod_rulant_sarcina')->nullable();
            $table->string('cladire_izolata')->nullable();
            $table->string('tip_acoperis')->nullable();
            $table->string('tip_acoperis-grosime-vata')->nullable();
            $table->string('tip_acoperis-tip_membrana')->nullable();
            $table->string('tip_acoperis-grosime-membrana')->nullable();
            $table->string('tip_acoperis-panou-sandwich-spuma-tip')->nullable();
            $table->string('tip_acoperis-grosime')->nullable();
            $table->string('tip_pereti')->nullable();
            $table->string('tip_pereti-grosime')->nullable();
            $table->text('trape_fum')->nullable();
            $table->text('ferestre')->nullable();
            $table->text('usi_sectionale')->nullable();
            $table->text('usi_pietonale')->nullable();
            $table->text('rampe_acces_tir')->nullable();
            $table->text('extra_info')->nullable();

            $table->string('project_file')->nullable();

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
