<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCaissesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('caisses', function (Blueprint $table) {
            $table->foreign('id_Appartement')->references('id')->on('appartements')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_Locataire')->references('id')->on('locataires')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('caisses', function (Blueprint $table) {
            $table->dropForeign('caisses_id_appartement_foreign');
            $table->dropForeign('caisses_id_locataire_foreign');
        });
    }
}
