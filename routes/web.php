<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
+
*/

//Route::get('/', ['uses' => 'HomeController@getHome', 'as' => 'home']);


Route::get('/', 'HomeController@getHome')->name('home');
Route::post('/', 'HomeController@postHome')->name('home');

 

// RUTAS EN TERCEROS
Route::group(['prefix' => 'terceros'], function() {

    Route::get('login'		, 'TercerosController@getLogin'		)->name('login'); 
    Route::post('login'		, 'TercerosController@postLogin'	)->name('login');

    Route::get('registro'	, 'TercerosController@getRegistro'	)->name('registro'); 
 	Route::post('registro'	, 'TercerosController@postRegistro'	)->name('registro');

 	Route::get('salir'	    , 'TercerosController@getSalir'	)->name('salir');
});
 