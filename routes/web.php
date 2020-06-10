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

Route::get('/', 'HomeController@index');
Route::get('/authors', 'AuthorController@index');
Route::get('/authors/create', 'AuthorController@index');
Route::get('/authors/store', 'AuthorController@index');
Route::get('/authors/edit/{author}', 'AuthorController@index');
Route::get('/authors/update/{author}', 'AuthorController@index');
Route::get('/authors/delete/{author}', 'AuthorController@index');



