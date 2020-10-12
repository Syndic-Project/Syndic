<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmeublesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immeubles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nom_Immeuble');
            $table->unsignedBigInteger('id_bloc')->unique();
            $table->foreign('id_bloc')->references('id')->on('blocs');
            $table->float('Montant_Cotisation_Mensuelle');
            $table->float('Montant_Disponible_En_Caisse');
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
        Schema::dropIfExists('immeubles');
    }
}
