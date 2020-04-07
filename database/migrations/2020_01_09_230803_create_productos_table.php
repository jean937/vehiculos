<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table ->string('nombre',150)->nullable()->require();
            $table ->string('apellido',150)->require();
            $table ->string('cedula',13)-> unique()->required();
            $table ->string('celular',13)-> unique()->required();
            $table ->date('fecha_salida')->require();
            $table ->date('fecha_devolucion')->require();
            $table ->string('hora_alquiler')->nullable();
            $table->integer('categorias_id')->unsigned();
            $table->integer('marcas_id')->unsigned();
             $table ->string('placa',13)->required();

             $table ->string('valor_alquiler',13)->nullable()->required(); // es unico

            // para no poner nada descripcion


            $table->timestamps();

            // relaciones
            $table->foreign('marcas_id')->references('id')->on('marcas');
            $table->foreign('categorias_id')->references('id')->on('categorias');

        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
