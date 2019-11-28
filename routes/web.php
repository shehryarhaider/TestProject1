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

// php artisan make:controller UserController --resource
// php artisan route:list

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test','TestController@index')->name('test');

Route::post('/user_create','TestController@create')->name('user.create');
Route::get('/test/{id}','TestController@edit')->name('test.edit');
Route::post('/test/update/{id}','TestController@update')->name('test.update');

Route::get('/test/delete/{id}','TestController@delete')->name('test.delete');

