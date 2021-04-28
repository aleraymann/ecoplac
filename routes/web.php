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
})->name('produtos');

Route::get('/produtos/madeirites', function () {
     return view('madeirites');
})->name('madeirite');

Route::get('/produtos/madeirites/madeirite-plastificado', function () {
    return view('madeirite-plastificado');
})->name('m.plastificado');

Route::get('/produtos/madeirites/madeirite-plastificado-antiderrapante', function () {
    return view('madeirite-plastificado-antiderrapante');
})->name('mp.antiderrapante');
Route::get('/produtos/madeirites/madeirite-plastificado-extra', function () {
    return view('madeirite-plastificado-extra');
})->name('mp.extra');

Route::get('/produtos/madeirites/madeirite-resinado-wbp', function () {
    return view('madeirite-resinado-wbp');
})->name('m.resinado-wbp');
Route::get('/produtos/madeirites/madeirite-resinado-mr', function () {
    return view('madeirite-resinado-mr');
})->name('m.resinado-mr');

Route::get('/produtos/compensados', function () {
    return view('compensados');
})->name('compensados');

Route::get('/produtos/compensados/pinus-industrial', function () {
    return view('compensado-industrial');
})->name('c.industrial');

Route::get('/produtos/compensados/pinus-embalagem', function () {
    return view('compensado-embalagem');
})->name('c.embalagem');

Route::get('/produtos/compensados/moveleiro-parica', function () {
    return view('compensado-moveleiro-parica');
})->name('c.moveleiro-parica');

Route::get('/produtos/compensados/eucalipto', function () {
    return view('compensado-eucalipto');
})->name('c.eucalipto');

Route::get('/produtos/madeiras-serradas', function () {
    return view('madeiras-serradas');
})->name('madeiras-serradas');
Route::get('/produtos/madeiras-serradas/pontalete', function () {
    return view('madeira-serrada-pontalete');
})->name('ms.pontalete');
Route::get('/produtos/madeiras-serradas/ripa', function () {
    return view('madeira-serrada-ripa');
})->name('ms.ripa');

Route::get('/produtos/painel-ecowall', function () {
    return view('painel-ecowall');
})->name('ecowall');
Route::get('/produtos/painel-ecowall/comparativo-ecowall-drywall', function () {
    return view('comparativo-ecowall');
})->name('ecowall-drywall');



Route::get('/segmentos', function () {
    return view('segmentos');
})->name('segmentos');
Route::get('/segmentos/construcao-civil', function () {
    return view('construcao_civil');
})->name('s.ccvil');
Route::get('/segmentos/feiras-eventos-stands', function () {
    return view('feiras');
})->name('s.feiras-eventos');
Route::get('/segmentos/embalagens', function () {
    return view('embalagens');
})->name('s.embalagens');