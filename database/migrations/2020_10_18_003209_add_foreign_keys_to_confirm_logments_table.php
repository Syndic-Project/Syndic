<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToConfirmLogmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('confirm_logments', function (Blueprint $table) {
            $table->foreign('id_Appartement')->references('id')->on('appartements')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_Locateur')->references('id')->on('locateurs')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('confirm_logments', function (Blueprint $table) {
            $table->dropForeign('confirm_logments_id_appartement_foreign');
            $table->dropForeign('confirm_logments_id_locateur_foreign');
        });
    }
}
