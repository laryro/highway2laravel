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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/client', 'ClientController@create');
    Route::post('/client', 'ClientController@store')->name('client.store');

});


Route::group(['prefix' => 'eloquent', 'as' => 'eloquent.'], function() {
    Route::get('/clients', 'EloquentClientsController@index')->name('client.list');
    Route::get('/clients/create', 'EloquentClientsController@create')->name('client.create');
    Route::post('/clients/store', 'EloquentClientsController@store')->name('client.store');

});


//prefix = na url
// as = no nome da rota

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {

    Route::get('/', 'UserController@index')->name('list');
    Route::get('/create', 'UserController@create')->name('create');

    //post
    Route::post('/post', 'UserController@post')->name('post');

});
 