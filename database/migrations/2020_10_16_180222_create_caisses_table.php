<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaissesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caisses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('Date_Paiment');
            $table->date('Dernier_Mois_Paye');
            $table->date('email')->unique();
            $table->date('Nbr_Mois_Paye');
            $table->date('MT_Paye');

            $table->unsignedBigInteger('id_Locataire');
            $table->foreign('id_Locataire')->references('id')->on('locataires');

            $table->unsignedBigInteger('id_Appartement');
            $table->foreign('id_Appartement')->references('id')->on('appartements');

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
        Schema::dropIfExists('caisses');
    }
}
