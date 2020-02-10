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

// middleware bloqueia todos os sites que precisam estar logados para acessar
Route::get('/pets', 'PetsController@index')->middleware('auth:web'); 
Route::get('/pets/create', 'PetsController@create')->middleware('auth:web'); 
Route::post('/pets/store', 'PetsController@store')->middleware('auth:web'); 
Route::get('/pets/edit/{id}', 'PetsController@edit')->middleware('auth:web'); 
Route::patch('/pets/update/{id}', 'PetsController@update')->middleware('auth:web'); 
Route::delete('/pets/destroy/{id}', 'PetsController@destroy')->middleware('auth:web'); 

Route::get('/owners', 'OwnersController@index')->middleware('auth:web'); 
Route::get('/owners/create', 'OwnersController@create')->middleware('auth:web'); 
Route::post('/owners/store', 'OwnersController@store')->middleware('auth:web'); 
Route::get('/owners/edit/{id}', 'OwnersController@edit')->middleware('auth:web'); 
Route::patch('/owners/update/{id}', 'OwnersController@update')->middleware('auth:web'); 
Route::delete('/owners/destroy/{id}', 'OwnersController@destroy')->middleware('auth:web'); 

Route::auth();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
