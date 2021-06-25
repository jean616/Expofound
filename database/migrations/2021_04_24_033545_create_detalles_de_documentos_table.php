<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesDeDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_de_documentos', function (Blueprint $table) {
            $table->id();

        });
        Schema::table('detalles_de_documentos', function (Blueprint $table) {
            $table->unsignedBigInteger("id_Documento");
            $table->foreign("id_documento")->references("id")->on("documentos")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_de_documentos');
    }
}
