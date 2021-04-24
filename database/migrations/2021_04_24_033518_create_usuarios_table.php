<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->String("tipo_usuario",50);
            $table->String("nombre_usuario",100);
            $table->String("Apellido_usuario",100);
            $table->String("Contraseña",100);
            $table->int("telefono",9);
            $table->int("dni",8);
            $table->String("nombre_compañia",200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
