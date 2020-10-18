<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToResidencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('residences', function (Blueprint $table) {
            $table->foreign('id_syndic')->references('id')->on('syndics')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_ville')->references('id')->on('villes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('residences', function (Blueprint $table) {
            $table->dropForeign('residences_id_syndic_foreign');
            $table->dropForeign('residences_id_ville_foreign');
        });
    }
}
