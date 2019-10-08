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

/*Route::get('/hello', function() {
    return view('hello');
});*/
Route::get('/todo', 'Todo@index')->name('todoIndex');
Route::get('/todo/finish', 'Todo@finish');
Route::get('/todo/new', 'Todo@new_form')->name('todoNewForm'); 
Route::post('/todo/new', 'Todo@save')->name('todoCreate'); 
Route::get('/todo/{id}', 'Todo@detail')->name('todoDetail'); 
Route::get('/todo/{id}/delete', 'Todo@delete')->name('todoDelete'); 
Route::get('/todo/{id}/edit', 'Todo@edit')->name('todoEditForm');
Route::post('/todo/{id}/edit', 'Todo@update')->name('todoUpdate'); 