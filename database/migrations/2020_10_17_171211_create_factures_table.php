<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_de_paiment_facture');
            $table->string('designation');
            $table->float('Montant');
            $table->string('preuve');
            $table->unsignedBigInteger('id_Recu');
            $table->foreign('id_Recu')->references('id')->on('recus');

            $table->unsignedBigInteger('id_Type_facture');
            $table->foreign('id_Type_facture')->references('id')->on('type_factures');

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
        Schema::dropIfExists('factures');
    }
}
