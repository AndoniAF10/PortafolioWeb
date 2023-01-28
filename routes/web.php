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
    return view('Inicio');
})->name('Principal');

Route::get('/portafolio', function () {
    return view('portafolio');
})->name('portafolio');

Route::get('/contrato', function () {
    return view('contrato');
})->name('contrato');