<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //xonectar ala base de dato
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); // permite insertar valores nulo en ese campo
            $table->string('password');
            $table->rememberToken(); // seguridad
            $table->timestamps(); // estadistica cuando s creo o sc modifico usuario
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()  // dar de baja  esa tabla para borrar
    {
        Schema::dropIfExists('users');
    }
}
