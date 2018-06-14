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

Route::get('/vue', function(){
    return view('vue');   
  })->name('vue');  

Route::get('/newuser','UsuariosController@NewUser')->name('newuser');

Route::get('/error', function () {
    return 'La longitud del nombre es menos a 4 caracteres';
});

Route::get('/usuario/{nombre?}','UsuariosController@Index')
    ->Where
    ('nombre','[a-zA-z-üéáíóúñÑ]+')
    ->middleware('checkUsuario::nombre');   

Route::get('/Listado','UsuariosController@Listado')->name('Listado');

Route::get('/Show/{id?}','UsuariosController@Show')
    ->Where
    ('nombre','[0-9]+');

Route::get('/prueba',function()
{
		return('Esto es una prueba');
});

Route::post('/guardaruser','UsuariosController@GuardarUser'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuariosbase','UsuariosBaseController@index')->name('usuariosbase');

Route::get('profile', function () {
    // Zona de acceso restringido
})->middleware('auth.basic');

