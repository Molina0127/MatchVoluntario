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
    return view('site.usuarios.index');
});

Route::get('/teste', 'App\Http\Controllers\ApiController@index');

Route::get('/home', 'App\Http\Controllers\UsersController@create');

Route::get('/create/user', 'App\Http\Controllers\UsuariosController@create')->name('createUser');
Route::post('/create/user', 'App\Http\Controllers\UsuariosController@store')->name('saveUser');

Route::get('/ong/create', 'App\Http\Controllers\OngsController@create');
Route::post('/ong/create', 'App\Http\Controllers\OngsController@store')->name('saveOng'); 
Route::get('/ong/ver', 'App\Http\Controllers\OngsController@show');
Route::get('/ong/del/{id}','App\Http\Controllers\OngsController@destroy')->name('excluirOng');
Route::get('/ong/edit/{id}','App\Http\Controllers\OngsController@edit')->name('editarOng');
Route::post('/ong/edit/{id}','App\Http\Controllers\OngsController@update')->name('atualizarOng');



