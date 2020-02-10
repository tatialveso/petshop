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

Route::get('/pets', 'PetsController@index'); 
Route::get('/pets/create', 'PetsController@create');
Route::post('/pets/store', 'PetsController@store');
Route::get('/pets/edit/{id}', 'PetsController@edit');
Route::patch('/pets/update/{id}', 'PetsController@update');
Route::delete('/pets/destroy/{id}', 'PetsController@destroy');

Route::get('/owners', 'OwnersController@index');
Route::get('/owners/create', 'OwnersController@create');
Route::post('/owners/store', 'OwnersController@store');
Route::get('/owners/edit/{id}', 'OwnersController@edit');
Route::patch('/owners/update/{id}', 'OwnersController@update');
Route::delete('/owners/destroy/{id}', 'OwnersController@destroy');

Route::auth();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
