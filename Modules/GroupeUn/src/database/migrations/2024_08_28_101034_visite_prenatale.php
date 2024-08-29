<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('visite_prenatales', function (Blueprint $table) {
            $table->id();
            $table->date("date_visite")->nullable();
            $table->string("terme")->nullable();
            $table->string("plaintes")->nullable();
            $table->string("examen_general")->nullable();
            $table->string("leucocytes")->nullable();
            $table->string("nitrites")->nullable();
            $table->string("sucre")->nullable();
            $table->string("albumine")->nullable();
            $table->string("omi")->nullable();
            $table->string("poids")->nullable();
            $table->double("taille")->nullable();
            $table->double("tension_arterienne")->nullable();
            $table->string("conjonctivites")->nullable();
            $table->double("seins")->nullable();
            $table->string("hu")->nullable();
            $table->string("palper")->nullable();
            $table->string("bdc_foetal")->nullable();
            $table->string("mouvements_foetaux")->nullable();
            $table->string("speculum")->nullable();
            $table->string("tv")->nullable();
            $table->string("echographie")->nullable();
            $table->string("au_total")->nullable();
            $table->string("conduite_a_tenir")->nullable();
            $table->date("prochain_rdv")->nullable();
            $table->date("pa_gain")->nullable();
            $table->date("pa_tv_col")->nullable();
            $table->date("pa_tv_segment_inferieur")->nullable();
            $table->date("pa_tv_presentation")->nullable();
            $table->date("pa_tv_m_ogive_pubienne")->nullable();
            $table->date("pa_tv_m_perinee")->nullable();
            $table->date("pa_tv_m_diametre_prp")->nullable();
            $table->date("pa_tv_lignes_innominees")->nullable();
            $table->date("pa_autres_facteurs_pathologiques")->nullable();
            $table->date("pa_conclusion")->nullable();
           

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists("visite_prenatales");
    }
};