<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Rotas
Route::get('produtos', 'CelularController@index');
Route::post('vendas', 'VendaController@store');
Route::get('vendas', 'VendaController@index');
Route::get('vendas/{id}', 'VendaController@show');
Route::delete('vendas/{id}', 'VendaController@destroy');
Route::post('vendas/{id}/produtos', 'VendaController@addProdutos');
