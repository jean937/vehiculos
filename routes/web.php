<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\InicioController;

Route::get('/inicio','InicioController@index');

Route::get('/', function () {
    return view('auth.login');
});



Route::get('/miruta', function () {
    echo (' hola mundo');
});


Route::get('/saludo/{nombre}/{apellido?}', function ($nombre,$apellido ='(no ingresado el apellido)') { // declaras una variable
    echo ' hola '.$nombre.' '.$apellido;  //{apellido?}  ($nombre,$apellido = null) no c llame ese campo
});

//controladores

Route::get('/vehiculo', 'Productoscontroller@index1' );



Route::get('marcas', 'MarcasController@index' )->name ('marcas.index');

Route::get('marcas/create', 'MarcasController@create' )->name ('marcas.create');

Route::post('marcas/store', 'MarcasController@store' )
->name ('marcas.store');

Route::get('marcas/{id}/edit', 'MarcasController@edit' )
->name ('marcas.edit');

Route::put('marcas/{id}', 'MarcasController@update' )
->name ('marcas.update');


Route::delete('marcas/{id}', 'MarcasController@delete' )
->name ('marcas.delete');


Route::get('productos', 'ProductosController@index1' )
->name ('productos.index1');

Route::get('productos', 'ProductosController@index' )
->name ('productos.index');

Route::get('productos/create', 'ProductosController@create' )
->name ('productos.create');



Route::get('productos/{id}', 'ProductosController@show' )
->name ('productos.show');

Route::post('productos/store', 'ProductosController@store' )
->name ('productos.store');

Route::get('productos/{id}/edit', 'ProductosController@edit' )
->name ('productos.edit');

Route::put('productos/{id}', 'ProductosController@update' )
->name ('productos.update');


Route::delete('productos/{id}', 'ProductosController@delete' )
->name ('productos.delete');


Route::get('marcas', 'MarcasController@index' )
->name ('marcas.index');

Route::get('marcas/create', 'MarcasController@create' )
->name ('marcas.create');

Route::post('marcas/store', 'MarcasController@store' )
->name ('marcas.store');

Route::get('marcas/{id}/edit', 'MarcasController@edit' )
->name ('marcas.edit');

Route::put('marcas/{id}', 'MarcasController@update' )
->name ('marcas.update');


Route::delete('marcas/{id}', 'MarcasController@delete' )
->name ('marcas.delete');




Route::get('categorias', 'CategoriasController@index' )
->name ('categorias.index');

Route::get('categorias/create', 'CategoriasController@create' )
->name ('categorias.create');



Route::get('categorias/{id}', 'CategoriasController@show' )
->name ('categorias.show');

Route::post('categorias/store', 'CategoriasController@store' )
->name ('categorias.store');

Route::get('categorias/{id}/edit', 'CategoriasController@edit' )
->name ('categorias.edit');

Route::put('categorias/{id}', 'CategoriasController@update' )
->name ('categorias.update');


Route::delete('categorias/{id}', 'CategoriasController@delete' )
->name ('categorias.delete');







////Route::get('/categorias', 'Categoriascontroller@index1' );

// vistas formularios

//Route::get('/vistacateg', 'Categoriascontroller@index' );

Route::get('/form', 'Productoscontroller@index' );
Route::get('/form', 'Categoriascontroller@index' );

//Route::get('/vistamarc', 'Marcascontroller@index' );




Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
