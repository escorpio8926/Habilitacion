<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Rutas de de autentificación
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Rutas para registrar Usuario
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



Route::get('/', function () {
    return view('welcome');
});

//por defecto redirigir al listado de proyectos
Route::get('/', function () {
    return redirect()->route('proyectos.index');
});

//agrupamos todas las rutas que necesitan que el usuario este autentificado
Route::group(['middleware' => 'auth'], function () {
  // Rutas para el recurso proyecto básicamente las rutas que hacen ABM y listado de Proyectos
  Route::resource("proyectos","ProyectoController");
  // almacena la tarea nueva
  Route::post("proyectos/{proyectos}/actividade",['as' => 'proyectos.storeActividade','uses'=>'ProyectoController@storeActividade']);
  // elimina una tarea
  Route::delete("proyectos/{proyectos}/actividade/{idActividade}",['as' => 'proyectos.destroyActividade','uses'=>'ProyectoController@destroyActividade']);
  // modifica una tarea el verbo tiene que ser por método put
  Route::put("proyectos/{proyectos}/actividade/{idActividade}",['as' => 'proyectos.updateActividade','uses'=>'ProyectoController@updateActividade']);
}); //Route::group(['middleware' => 'auth'], function ()
