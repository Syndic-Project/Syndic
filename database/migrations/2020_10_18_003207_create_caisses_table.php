<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaissesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caisses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('Date_Paiment')->nullable();
            $table->date('Dernier_Mois_Paye')->nullable();
            $table->date('email')->nullable()->unique();
            $table->date('Nbr_Mois_Paye')->nullable();
            $table->date('MT_Paye')->nullable();
            $table->unsignedBigInteger('id_Locataire')->nullable()->index('caisses_id_locataire_foreign');
            $table->unsignedBigInteger('id_Appartement')->nullable()->index('caisses_id_appartement_foreign');
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
        Schema::dropIfExists('caisses');
    }
}
