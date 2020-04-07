<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    //
    protected $fillable = [   //[ todo elemento de un arreglo]


        'nombre',
        'apellido',
        'cedula',
        'celular',
        'fecha_salida',
        'fecha_devolucion',
        'hora_alquiler',
        'categorias_id',
        'marcas_id',
        'placa',

        'valor_alquiler'







    ];


    public function marcas(){

        return $this->belongsTo('App\Marca','marcas_id');
    }
    public function categorias(){

        return $this->belongsTo('App\Categoria','categorias_id');
    }

}

