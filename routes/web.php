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
//Route::post('/categoria/destroy/{cat_id}',function(){
	//dd('okk');
//})->name('categoria.destroy');