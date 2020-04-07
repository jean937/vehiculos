<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarcaStoreRequest;
use App\Marca;

use Illuminate\Http\Request;

class MarcasController extends Controller
{

    public  function index(){
    $marcas = Marca::get();
        //dd($marcas); // dd sale todas resúes datos que yo no necesito
     return view('sistema.marcas.index', compact('marcas'));

    }
       //public  function index(){
       // $marcas = Marca::get();
           //dd($marcas); // dd sale todas resúes datos que yo no necesito
          // return view('sistema.vistamarc', compact('marcas'));
      // }


           public function create(){
              return view('sistema.marcas.create');


           }


           public function store(MarcaStoreRequest $request){

            $marca = Marca::create($request->all());
            return redirect()->route('marcas.create')->with('mensaje','Marca creada con exitos');

   }

        public function edit($id){
            $marca = Marca::findOrFail($id);
            return view('sistema.marcas.edit')->with(compact('marca'));
        }

        public function update(MarcaStoreRequest $request, $id){
            $marca = Marca::find($id);
            $marca->update($request->all());
            return redirect()->route('marcas.index');
        }

        public function delete($id){
        //
        $marca = Marca::destroy($id);

    return redirect('marcas');
    }


}









