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
            $table->unsignedBigInteger('id_bloc')->index('immeubles_id_bloc_foreign');
            $table->double('Montant_Cotisation_Mensuelle', 8, 2);
            $table->double('Montant_Disponible_En_Caisse', 8, 2);
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
