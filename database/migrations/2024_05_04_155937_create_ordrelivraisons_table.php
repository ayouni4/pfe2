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
        Schema::create('ordrelivraisons', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('hauteur');
            $table->string('largeur');
            $table->string('ville');
            $table->string('city');

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
        Schema::dropIfExists('ordrelivraisons');
    }
};
