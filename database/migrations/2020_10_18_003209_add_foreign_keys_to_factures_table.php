<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('factures', function (Blueprint $table) {
            $table->foreign('id_Recu')->references('id')->on('recus')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_Type_facture')->references('id')->on('type_factures')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('factures', function (Blueprint $table) {
            $table->dropForeign('factures_id_recu_foreign');
            $table->dropForeign('factures_id_type_facture_foreign');
        });
    }
}
