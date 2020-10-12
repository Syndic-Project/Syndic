<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_residence');
            $table->unsignedBigInteger('id_ville')->unique();
            $table->foreign('id_ville')->references('id')->on('villes');
            $table->string('adresse');
            $table->unsignedBigInteger('id_syndic')->unique();
            $table->foreign('id_syndic')->references('id')->on('syndics');
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
        Schema::dropIfExists('residences');
    }
}
