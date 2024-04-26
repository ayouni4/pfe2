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
        Schema::create('pointrelais', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('responsable');
            $table->string('numero');
            $table->string('matricule');
            $table->string('adresse');
            $table->string('Houvert');
            $table->string('Hfermeture');
            $table->string('journnée');
            $table->string('typeprelais');
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
        Schema::dropIfExists('pointrelais');
    }
};
