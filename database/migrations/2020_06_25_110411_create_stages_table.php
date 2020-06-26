<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->bigIncrements('ID_STAGE');

            $table->string('ORGANISME_STAGE');
            $table->string('TEL_STAGE');
            $table->string('FAX_STAGE');
            $table->string('EMAIL_STAGE');

            $table->string('ENCADRANT_STAGE');

            $table->string('DATE_DEBUT');
            $table->string('DATE_FIN');

            $table->bigInteger('DEMANDE_ID');

            $table->foreign('DEMANDE_ID')->references('ID_DEMANDE')->on('demande_de_stages')->onDelete('cascade');
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
        Schema::dropIfExists('stages');
    }
}
