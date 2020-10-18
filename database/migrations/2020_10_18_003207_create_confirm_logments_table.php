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
            $table->tinyInteger('Accorder');
            $table->unsignedBigInteger('id_Locateur')->index('confirm_logments_id_locateur_foreign');
            $table->unsignedBigInteger('id_Appartement')->index('confirm_logments_id_appartement_foreign');
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
