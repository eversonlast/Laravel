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
    return view('site.master.tela');
});

Route::get('/teste', function(){
    return view('layouts.app');
});

Route::get('/painel', function () {
    return view('admin.home');
});