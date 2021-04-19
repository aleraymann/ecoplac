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
    return view('welcome');
});

Route::get('/produtos', function () {
    return view('produtos');
});
Route::get('/segmentos', function () {
    return view('segmentos');
});

Route::get('/produtos/madeirites', function () {
     return view('madeirites');
});

Route::get('/produtos/compensados', function () {
    return view('compensados');
});
Route::get('/produtos/madeiras-serradas', function () {
    return view('madeiras-serradas');
});