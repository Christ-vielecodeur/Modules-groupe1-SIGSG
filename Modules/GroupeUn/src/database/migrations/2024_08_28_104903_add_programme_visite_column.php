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
        Schema::table("visite_prenatales",function(Blueprint $table){
            $table->unsignedBigInteger("programme_visites_id")->nullable()->after("id");
            $table->foreign("programme_visites_id")->references("id")->on("visite_prenatales")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropColumns("visite_prenatales","programme_visites_id");
    }
};