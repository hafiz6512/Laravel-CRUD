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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@about');

//CRUD = Create, Read, Customize/Update, Destroy/Delete
Route::get('/contacts', 'ContactController@index');
Route::get('/contacts/create', 'ContactController@create')->name('contacts.create');
Route::post('/contacts/store', 'ContactController@store')->name('contacts.store');
Route::get('/contacts/{id}/edit', 'ContactController@edit')->name('contacts.edit');
Route::post('/contacts/{id}/update', 'ContactController@update')->name('contacts.update');
Route::get('/contacts/{id}/destroy', 'ContactController@destroy')->name('contacts.destroy');
