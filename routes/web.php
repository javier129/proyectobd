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

Route::get('/login', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function(){

    //////////////////////Cargos////////////////////
    Route::group(['prefix' => 'cargos'], function(){
        Route::get('/', 'CargoController@index');
        Route::post('/buscar','CargoController@store');
        Route::post('/add_new', 'CargoController@create');
        Route::get('/get_item', 'CargoController@show');
        Route::get('/delete_item', 'CargoController@destroy');
        Route::post('/edit', 'CargoController@update');
    });
    ////////////////////////////////////////////////


     /////////////////////Facultades//////////
    Route::group(['prefix' => 'facultades'], function(){
        Route::get('/', 'FacultadesController@index')->name('facultades.index');
        Route::post('/buscar','FacultadesController@store');
        Route::post('/add_new', 'FacultadesController@create');
        Route::get('/get_item', 'FacultadesController@show');
        Route::get('/delete_item', 'FacultadesController@destroy');
        Route::post('/edit', 'FacultadesController@update');
    });
    ////////////////////////////////////////////////

    /////////////////////Extensiones//////////
    Route::group(['prefix' => 'extensiones'], function(){
        Route::get('/', 'ExtensionesController@index')->name('extensiones.index');
        Route::post('/buscar','ExtensionesController@store');
        Route::post('/add_new', 'ExtensionesController@create');
        Route::get('/get_item', 'ExtensionesController@show');
        Route::get('/delete_item', 'ExtensionesController@destroy');
        Route::post('/edit', 'ExtensionesController@update');
    });
    ////////////////////////////////////////////////

    /////////////////////Escuelas//////////
    Route::group(['prefix' => 'escuelas'], function(){
        Route::get('/', 'EscuelasController@index')->name('escuelas.index');
        Route::post('/buscar','EscuelasController@store');
        Route::post('/add_new', 'EscuelasController@create');
        Route::get('/get_item', 'EscuelasController@show');
        Route::get('/delete_item', 'EscuelasController@destroy');
        Route::post('/edit', 'EscuelasController@update');
    });
    ////////////////////////////////////////////////


});
