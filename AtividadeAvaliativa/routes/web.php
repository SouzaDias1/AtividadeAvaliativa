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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Categoria', function () {
    return view('Categoria');
});

Route::get('/Cliente', function () {
    return view('Cliente');
});

Route::get('/Pedido', function () {
    return view('Pedido');
});

Route::get('/Produto', function () {
    return view('Produto');
});
