<?php

namespace App\Http\Controllers;


use App\Categoria;

use Illuminate\Http\Request;


use App\Http\Requests\CategoriasStoreRequest;

class Categoriascontroller extends Controller
{
    //



           public  function index(){
            $categorias = Categoria::get();
               //dd($marcas); // dd sale todas resúes datos que yo no necesito
               return view('sistema.categorias.index', compact('categorias'));


}
public function create(){
    return view('sistema.categorias.create');


}
public function store(CategoriasStoreRequest $request){

    $categoria = Categoria::create($request->all());
    return redirect()->route('categorias.create')->with('mensaje','Categorias creada con exitos');;

}


public function edit($id){
    $categoria = Categoria::findOrFail($id);
    return view('sistema.categorias.edit')->with(compact('categoria'));
}

public function update(CategoriasStoreRequest $request, $id){
    $categoria = Categoria::find($id);
    $categoria->update($request->all());
    return redirect()->route('categorias.index');
}

public function delete($id){
    //
    $categoria = Categoria::destroy($id);

return redirect('categorias');
}

}
