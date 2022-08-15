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
})->name('index');


Route::get('/usuarios/create', 'App\Http\Controllers\UsuariosController@create')->name('createUsuario');
Route::post('/usuarios/create', 'App\Http\Controllers\UsuariosController@save')->name('saveUsuario');
Route::get('/usuario/login', 'App\Http\Controllers\LoginController@login')->name('loginUsuario');
Route::post('/usuario/auth', 'App\Http\Controllers\LoginController@auth')->name('authUsuario');
Route::get('/usuarios/ver', 'App\Http\Controllers\UsuariosController@show')->name('listaUsuarios');
Route::get('/usuarios/del/{id}','App\Http\Controllers\UsuariosController@destroy')->name('excluirUsuario')->middleware('auth');
Route::get('/usuarios/edit/{id}','App\Http\Controllers\UsuariosController@edit')->name('editarUsuario')->middleware('auth');
Route::put('/usuarios/edit/{id}','App\Http\Controllers\UsuariosController@update')->name('atualizarUsuario')->middleware('auth');
Route::get('/usuario/join/{id}', [App\Http\Controllers\UsuariosController::class, 'joinUsuario']);
Route::post('/usuario/logout', 'App\Http\Controllers\UsuariosController@logout')->name('logout');

Route::get('/home', [App\Http\Controllers\UsuariosController::class, 'index'])->name('home');

Route::get('/ong/create', 'App\Http\Controllers\OngsController@create')->name('createOng');
Route::post('/ong/create', 'App\Http\Controllers\OngsController@save')->name('saveOng'); 
Route::get('/ong/login', 'App\Http\Controllers\LoginController@loginOng')->name('loginOng');
Route::post('/ong/auth', 'App\Http\Controllers\LoginController@authOng')->name('authOng');
Route::get('/home', 'App\Http\Controllers\OngsController@show')->name('listaOngs');
Route::get('/ong/{id}', 'App\Http\Controllers\OngsController@showOng')->name('listaOng');
Route::get('/usuario/{id}', 'App\Http\Controllers\OngsController@showUsuario')->name('listaUsuario');
Route::get('/ong/del/{id}','App\Http\Controllers\OngsController@destroy')->name('excluirOng');
Route::get('/ong/edit/{id}','App\Http\Controllers\OngsController@edit')->name('editarOng');
Route::post('/ong/edit/{id}','App\Http\Controllers\OngsController@update')->name('atualizarOng');
Route::get('/dashboard', [App\Http\Controllers\OngsController::class, 'dashboard'])->name('perfilUsuario');
Route::get('/dashboard/ong', [App\Http\Controllers\OngsController::class, 'dashboardOng'])->name('perfilOng');
Route::get('/ong/join/{id}', [App\Http\Controllers\OngsController::class, 'joinOng']);
Route::post('/ong/logout', 'App\Http\Controllers\OngsController@logoutOng')->name('logoutOng');