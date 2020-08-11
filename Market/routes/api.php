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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('clientes', 'ClientesController@list');
Route::get('clientes/{id}', 'ClientesController@get');
Route::post('clientes', 'ClientesController@create');
Route::put('clientes/{id}', 'ClientesController@update');
Route::delete('clientes/{id}', 'ClientesController@delete');

Route::get('categorias', 'CategoriasController@list');
Route::get('categorias/{id}', 'CategoriasController@get');
Route::post('categorias', 'CategoriasController@create');
Route::put('categorias/{id}', 'CategoriasController@update');
Route::delete('categorias/{id}', 'CategoriasController@delete');

Route::get('cotizaciones', 'CotizacionesController@list');
Route::get('cotizaciones/{id}', 'CotizacionesController@get');
Route::post('cotizaciones', 'CotizacionesController@create');
Route::put('cotizaciones/{id}', 'CotizacionesController@update');
Route::delete('cotizaciones/{id}', 'CotizacionesController@delete');

Route::get('productos', 'ProductosController@list');
Route::get('productos/{id}', 'ProductosController@get');
Route::post('productos', 'ProductosController@create');
Route::put('productos/{id}', 'ProductosController@update');
Route::delete('productos/{id}', 'ProductosController@delete');

Route::get('servicios', 'ServiciosController@list');
Route::get('servicios/{id}', 'ServiciosController@get');
Route::post('servicios', 'ServiciosController@create');
Route::put('servicios/{id}', 'ServiciosController@update');
Route::delete('servicios/{id}', 'ServiciosController@delete');

Route::get('sitios', 'SitiosController@list');
Route::get('sitios/{id}', 'SitiosController@get');
Route::post('sitios', 'SitiosController@create');
Route::put('sitios/{id}', 'SitiosController@update');
Route::delete('sitios/{id}', 'SitiosController@delete');
