<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categorias', '\App\Http\Controllers\ControladorCategoria@indexJson');
Route::resource('/produtos', '\App\Http\Controllers\ControladorProduto');
Route::get('/categorias/{id}', 'App\Http\Controllers\ControladorCategoria@show'); // Rota usada para atualizar uma categoria


