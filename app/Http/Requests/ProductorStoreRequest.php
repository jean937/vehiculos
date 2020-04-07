<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductorStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'min:10|max:10|required',
            'celular' => 'min:10|max:10|required',
            'fecha_salida' => 'required',
            'fecha_devolucion' => 'required',
            'hora_alquiler' => 'required',
         'categorias_id' => 'required',
            'marcas_id' => 'required',
            'placa' => 'required',
            'valor_alquiler' => 'required'


        ];
    }

}
