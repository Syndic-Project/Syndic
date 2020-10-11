<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppartementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_Immeuble')->unique();
            $table->foreign('id_Immeuble')->references('id')->on('Immeubles');
            $table->string('Type_du_bien');
            $table->integer('Num_Porte');
            $table->date('Dernier_Mois_Pays');
            $table->string('Tel');


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
        Schema::dropIfExists('appartements');
    }
}
