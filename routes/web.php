<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/komik', 'KomikController@index');
Route::get('/komik/create', 'KomikController@create'); 
Route::post('/komik', 'KomikController@store');
Route::get('komik/{id}/edit', 'KomikController@edit'); 
Route::patch('komik/{id}', 'KomikController@update');
Route::delete('komik/{id}', 'KomikController@destroy');
Route::get('komik/{id}/lihat','KomikController@lihat');
Route::get('komik/search', 'KomikController@search');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
