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



Route::get('/',function(){
    return view('welcome');
});

Auth::routes();

Route::get('/conta/{conta}', 'ContasController@show')->name('conta.show');
Route::get('/conta/{conta}/transferir', 'TransferenciaController@create')->name('transferencia.create');
Route::post('/conta/{conta}/transferir', 'TransferenciaController@store')->name('transferencia.store');


Route::get('/home', 'HomeController@index')->name('home');
