<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // protected $table = 'nombre de la tabla'; // cambiar nombre ami table

    protected $fillable = [

        'categoria',
        'garantia'


    ];

    public function productos(){

        return $this->belongsTo('App\producto');
    }

}
