<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('programme_visites', function (Blueprint $table) {
            $table->id();
            $table->string("numero_visite")->nullable();
            $table->date("semaine_grossesse_debut")->nullable();
            $table->date("semaine_grossesse_fin")->nullable();
            $table->timestamp("date_creation_visite")->default(Carbon::now());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists("programme_visites");
    }
};