<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});



Route::get('/categorias', 'App\Http\Controllers\ControladorCategoria@index');
Route::get('/categorias/novo', 'App\Http\Controllers\ControladorCategoria@create'); // Rota usada para cadastrar nova categoria
Route::post('/categorias', 'App\Http\Controllers\ControladorCategoria@store');
Route::get('/categorias/apagar/{id}', 'App\Http\Controllers\ControladorCategoria@destroy'); // Rota usada para apagar uma categoria
Route::get('/categorias/editar/{id}', 'App\Http\Controllers\ControladorCategoria@edit'); // Rota usada para editar uma categoria
Route::post('/categorias/{id}', 'App\Http\Controllers\ControladorCategoria@update'); // Rota usada para atualizar uma categoria


Route::get('/produtos', 'App\Http\Controllers\ControladorProduto@indexView');
Route::get('/produtos/novoproduto', 'App\Http\Controllers\ControladorProduto@create'); //Rota para cadastrar o produto
Route::post('/produtos', 'App\Http\Controllers\ControladorProduto@store');
Route::get('/produtos/apagar/{id}', 'App\Http\Controllers\ControladorProduto@destroy'); // Rota usada para apagar um produto
Route::get('/produtos/editar/{id}', 'App\Http\Controllers\ControladorProduto@edit'); // Rota usada para editar um produto
Route::post('/produtos/{id}', 'App\Http\Controllers\ControladorProduto@update'); // Rota usada para atualizar um produto
