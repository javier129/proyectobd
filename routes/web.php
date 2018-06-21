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



});
