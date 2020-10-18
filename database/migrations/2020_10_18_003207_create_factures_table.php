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
            $table->double('Montant', 8, 2);
            $table->string('preuve');
            $table->unsignedBigInteger('id_Recu')->index('factures_id_recu_foreign');
            $table->unsignedBigInteger('id_Type_facture')->index('factures_id_type_facture_foreign');
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
