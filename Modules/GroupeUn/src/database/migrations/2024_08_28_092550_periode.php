<?php

use Illuminate\Support\Carbon;
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
        Schema::create('periodes', function (Blueprint $table) {
            $table->id();
            $table->string("type_periode")->nullable();
            $table->date("date_debut_periode")->nullable();
            $table->date("date_fin_periode")->nullable();
            $table->integer("annee_periode")->nullable();
            $table->timestamp("date_creation_periode")->default(Carbon::now());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists("periodes");
    }
};