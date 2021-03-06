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

Route::get('/login', function () {
  return view('auth.login');
});

Route::get('/mapa', function () {
  return view('layouts.mapa');
});



Auth::routes();

Route::get('/admin/', function () {
  return view('layouts.app');
});

Route::get('/admin/{any}', function () {
return view('layouts.app');
})->where('any', '.*');



