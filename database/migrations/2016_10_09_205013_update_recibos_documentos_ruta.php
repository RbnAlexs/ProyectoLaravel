<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRecibosDocumentosRuta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recibos_documentos', function ($table) {
            $table->string('ruta', 20)->change();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recibos_documentos', function ($table) {
            $table->string('ruta', 20)->nullable()->change();
        });
    }
}
