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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios','UsuariosController@index')->name('usuarios');
Route::get('/usuarios/create','UsuariosController@create')->name('usuarios.create');
Route::post('/usuarios/store','UsuariosController@store')->name('usuarios.store');

Route::get('/categoria','CategoriaController@index')->name('categoria');
Route::get('/categoria/create','CategoriaController@create')->name('categoria.create');
Route::post('/categoria/store','CategoriaController@store')->name('categoria.store');

Route::get('/cargo','CargoController@index')->name('cargo');
Route::get('/categoria/edit/{cat_id}','CategoriaController@edit')->name('categoria.edit');
Route::post('/categoria/update/{cat_id}','CategoriaController@update')->name('categoria.update');

Route::post('/categoria/destroy/{cat_id}','CategoriaController@destroy')->name('categoria.destroy');
Route::get('/control','ControlController@index')->name('control');
Route::get('/control/create','ControlController@create')->name('control.create');
Route::post('/control/store','ControlController@store')->name('control.store');
Route::post('/control/destroy/{con_id}','ControlController@destroy')->name('control.destroy');
Route::post('/control/update/{con_id}','ControlController@update')->name('control.update');
Route::get('/control/edit/{con_id}','ControlController@edit')->name('control.edit');


Route::get('/tipo','tipoController@index')->name('tipo');
Route::get('/tipo/create','tipoController@create')->name('tipo.create');
Route::post('/tipo/update/{tip_id}','tipoController@update')->name('tipo.update');
Route::get('/tipo/edit/{tip_id}','tipoController@edit')->name('tipo.edit');
Route::post('/tipo/store','tipoController@store')->name('tipo.store');

Route::post('/tipo/destroy/{tip_id}','tipoController@destroy')->name('tipo.destroy');








//Route::post('/control/store','ControlController@store')->name('contol.store');
//Route::post('/categoria/destroy/{cat_id}',function(){
	//dd('okk');
//})->name('categoria.destroy');