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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function(){

    //////////////////////Cargos////////////////////
    Route::group(['prefix' => 'cargos'], function(){
        Route::get('/', function(){
            return view('cargos');
        });
        Route::post('/buscar','CargoController@store');
        Route::post('/add_new', 'CargoController@create');
    });
    ////////////////////////////////////////////////
});
