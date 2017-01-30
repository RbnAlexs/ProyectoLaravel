<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecibosDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibos_documentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_recibo')->unsigned();
            $table->integer('ruta')->string();
            $table->boolean("estatus");
            $table->timestamps();

            $table->foreign('id_recibo')->references('id')->on('recibos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('recibos_documentos');

        Schema::table('recibos_documentos', function($table)
        {
            $table->dropForeign('id_recibo');
        });
    }
}
