<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecuriteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('securites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nometprenom');
            $table->unsignedBigInteger('id_bloc');
            $table->foreign('id_bloc')->references('id')->on('blocs');
            $table->string('email');
            $table->string('password')->unique();
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
        Schema::dropIfExists('securite');
    }
}
