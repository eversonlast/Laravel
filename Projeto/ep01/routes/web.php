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

Route::group(['namespace'=>'Form'], function(){

    //Route::get('/listagensUsuarios', 'UserController@listUser');
    
    Route::get('/usuarios', 'UserController@listAllUsers')->name('users.listaAll');
    Route::get('/usuarios/novo', 'UserController@formAddUser')->name('users.formAddUser');
    Route::get('/usuarios/{user}', 'UserController@listUser')->name('users.list');
});


//Verbo post 
Route::post("/usuarios/store", 'Form\UserController@storeUser')->name('user.store');


//Verbo put
Route::get('/usuarios/editar/{user}', 'Form\UserController@formEditUser')->name('users.formEditUser');
Route::put('/usuarios/edit/{user}', 'Form\UserController@editUser')->name('user.edit');

//Delete 
Route::delete('/usuarios/destroy/{user}', 'Form\UserController@destroyUser')->name('user.destroy');