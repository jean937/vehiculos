<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Marca;
use App\Producto;

use Illuminate\Http\Request;
use App\Http\Requests\ProductorStoreRequest;



class Productoscontroller extends Controller
{
    //
    public  function index(){
        $productos = Producto::get();
     //$marcas= Marca:: select('marca','id')->get()->pluck('marca','id');
       // $categorias = Categoria::select('categoria','id')->get()->pluck('categoria','id');


           return view('sistema.productos.index', compact('productos'));

    }
           public  function index1(){
            $productos = Producto::get();
         //$marcas= Marca:: select('marca','id')->get()->pluck('marca','id');
           // $categorias = Categoria::select('categoria','id')->get()->pluck('categoria','id');




           return view('sistema.productos.index1', compact('productos'));

//copact  un arreglo
           //dd($marcas); // dd sale todas resúes datos que yo no necesito valor de una varible




    }
public function create(){

$marcas=Marca::all();
$categorias=Categoria::all();


    return view('sistema.productos.create', compact('marcas','categorias'));




}


public function store(ProductorStoreRequest $request){

  Producto::create($request->all());
 return redirect()->route('productos.create')->with('mensaje','registro creado con exitos');;

}

public function edit($id){
    $marcas=Marca::all();
    $categorias=Categoria::all();

 $productos= Producto::findOrFail($id);
 return view('sistema.productos.edit',compact('productos'), compact('marcas','categorias'
));

}

public function update(ProductorStoreRequest $request, $id){
 $productos = Producto::find($id);
 $productos->update($request->all());
 return redirect()->route('productos.index');

}

public function delete($id){
Producto::destroy($id);

return redirect('productos');

}


}
