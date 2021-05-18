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

//Route::get('/listagensUsuarios', 'UserController@listUser');

Route::get('/usuarios', 'Form\UserController@listAllUsers')->name('users.listaAll');
Route::get('/usuarios/novo', 'Form\UserController@formAddUser')->name('users.formAddUser');
Route::get('/usuarios/{user}', 'Form\UserController@listUser')->name('users.list');
