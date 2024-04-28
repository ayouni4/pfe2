<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colis', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('hauteur');
            $table->string('largeur');
            $table->string('poids');
            $table->string('adresse_debut');
            $table->string('adresse_fin');
            $table->string('type_colis');
            $table->string('type_matier');
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
        Schema::dropIfExists('colis');
    }
};
