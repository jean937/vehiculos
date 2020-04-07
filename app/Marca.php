<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    // objecto relational model
    protected $fillable= [    // la variable fillable permite permite actualizar los campos
                             // que se encuentren registrad0

        'marca'   // actualizar mas campo se pone la coma  'marca',' carr0'
    ];

    public function productos(){

        return $this->belongsTo('App\producto');
    }


    // permite hablitar las marcas de timepo en la base de datos



}
