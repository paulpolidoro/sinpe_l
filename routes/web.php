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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UserController@list');

Route::post('/users/save', 'UserController@create');

Route::get('/clients', 'ClientsController@index');

Route::get('/clients/details/{id}', 'ClientsController@details');

Route::get('/boleto', 'BoletoController@boleto');

Route::post('cliens/edited', 'ClientsController@saveEdit');