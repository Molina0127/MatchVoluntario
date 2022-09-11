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


Route::get('/test', 'App\Http\Controllers\TestController@index');
Route::get('/test2', 'App\Http\Controllers\TestController@invoke');
Route::get('/newHome', 'App\Http\Controllers\TestController@show');

Route::get('/usuarios/create', 'App\Http\Controllers\UsuariosController@create')->name('createUsuario');
Route::post('/usuarios/create', 'App\Http\Controllers\UsuariosController@save')->name('saveUsuario');
Route::get('/usuario/login', 'App\Http\Controllers\LoginController@login')->name('loginUsuario');
Route::post('/usuario/auth', 'App\Http\Controllers\LoginController@auth')->name('authUsuario');
Route::get('/usuarios/ver', 'App\Http\Controllers\UsuariosController@show')->name('listaUsuarios');//validado
Route::get('/usuarios/del/{id}','App\Http\Controllers\UsuariosController@destroy')->name('excluirUsuario')->middleware('auth');
Route::get('/usuarios/edit/{id}','App\Http\Controllers\UsuariosController@edit')->name('editarUsuario')->middleware('auth');
Route::patch('/usuarios/edit/{id}','App\Http\Controllers\UsuariosController@update')->name('atualizarUsuario')->middleware('auth');
Route::get('/myVolunteers', [App\Http\Controllers\UsuariosController::class, 'volunteersparticipants'])->name('myVolunteers');
Route::get('/usuario/join/{id}', [App\Http\Controllers\UsuariosController::class, 'joinUsuario']);
Route::get('/usuario/leave/{id}', [App\Http\Controllers\UsuariosController::class, 'removeVolunteer']);
Route::post('/usuario/logout', 'App\Http\Controllers\UsuariosController@logout')->name('logout');

Route::get('/entidade/{id}/', 'App\Http\Controllers\IndexController@entidade')->name('entidade');
Route::get('/delentidade/{id}/', 'App\Http\Controllers\IndexController@delentidade')->name('delentidade');
Route::get('/showRequests', 'App\Http\Controllers\IndexController@showRequests')->name('showRequests');
Route::get('/confirm/{id}/', 'App\Http\Controllers\IndexController@AcceptRequest')->name('confirm');
Route::get('/delrequest/{id}/', 'App\Http\Controllers\IndexController@DeleteRequest')->name('delrequest');

Route::get('/entidadeVol/{id}/', 'App\Http\Controllers\IndexController@entidadeVol')->name('entidadeVol');
Route::get('/delentidadeVol/{id}/', 'App\Http\Controllers\IndexController@delentidadeVol')->name('delentidadeVol');
Route::get('/showVolRequets', 'App\Http\Controllers\IndexController@showVolRequets')->name('showVolRequets');
Route::get('/confirmVol/{id}/', 'App\Http\Controllers\IndexController@AcceptOngRequest')->name('confirmOngRequest');
Route::get('/delVolrequest/{id}/', 'App\Http\Controllers\IndexController@DeleteOngRequest')->name('delVolrequest');


Route::get('/home', [App\Http\Controllers\UsuariosController::class, 'index'])->name('home');

Route::get('/ong/create', 'App\Http\Controllers\OngsController@create')->name('createOng');
Route::post('/ong/create', 'App\Http\Controllers\OngsController@save')->name('saveOng'); 
Route::get('/ong/login', 'App\Http\Controllers\LoginController@loginOng')->name('loginOng');
Route::post('/ong/auth', 'App\Http\Controllers\LoginController@authOng')->name('authOng');//validado
Route::get('/home', 'App\Http\Controllers\OngsController@show')->name('listaOngs')->middleware('auth');
Route::get('/ong/{id}', 'App\Http\Controllers\OngsController@showOng')->name('listaOng')->middleware('auth');
Route::get('/usuario/{id}', 'App\Http\Controllers\OngsController@showUsuario')->name('listaUsuario');//validado
Route::get('/ong/del/{id}','App\Http\Controllers\OngsController@destroy')->name('excluirOng');//validado
Route::get('/ong/edit/{id}','App\Http\Controllers\OngsController@edit')->name('editarOng');//validado
Route::put('/ong/edit/{id}','App\Http\Controllers\OngsController@update')->name('atualizarOng');//validado
Route::get('/dashboard', [App\Http\Controllers\OngsController::class, 'dashboard'])->name('perfilUsuario')->middleware('auth');
Route::get('/myongs', [App\Http\Controllers\OngsController::class, 'ongsasparticipant'])->name('myongs')->middleware('auth');
Route::get('/dashboard/ong', [App\Http\Controllers\OngsController::class, 'dashboardOng'])->name('perfilOng');//validado
Route::get('/ong/join/{id}', [App\Http\Controllers\OngsController::class, 'joinOng']);
Route::get('/ong/leave/{id}', [App\Http\Controllers\OngsController::class, 'leaveOng']);
Route::post('/ong/logout', 'App\Http\Controllers\OngsController@logoutOng')->name('logoutOng');