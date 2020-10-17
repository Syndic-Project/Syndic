<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfirmLogmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirm_logments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('DateD');
            $table->date('DateF');
            $table->boolean('Accorder');
            $table->unsignedBigInteger('id_Locateur');
            $table->foreign('id_Locateur')->references('id')->on('locateurs');

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
        Schema::dropIfExists('confirm_logments');
    }
}
