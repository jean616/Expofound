<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('dni');
            $table->integer('telefono');
            $table->integer('type');
            $table->rememberToken();
            $table->timestamps();
        });
        $password = Hash::make('secret');
        DB::table("users")
            ->insert([
                "name" => "ADMINISTRADOR",
                "apellido" => "admin",
                "email" => "administrador@gmail.com",
                "password" => "$password",
                "dni" => "78653212",
                "telefono" => 982747470,
                "type" => 3,
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
