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
Route::get('/authors/create', 'AuthorController@create');
Route::post('/authors/store', 'AuthorController@store');
Route::get('/authors/edit/{author}', 'AuthorController@edit');
Route::post('/authors/update/{author}', 'AuthorController@update');
Route::get('/authors/delete/{author}', 'AuthorController@delete');

Route::get('/login', 'LoginController@showForm')->name('login');
Route::post('/authenticate', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::get('/books', 'BookController@index');
Route::get('/books/create', 'BookController@create');
Route::post('/books/store', 'BookController@store');
Route::get('/books/edit/{book}', 'BookController@edit');
Route::post('/books/update/{book}', 'BookController@update');
Route::get('/books/delete/{book}', 'BookController@delete');

Route::get('/genres', 'GenreController@index');
Route::get('/genres/create', 'GenreController@create');
Route::post('/genres/store', 'GenreController@store');
Route::get('/genres/edit/{genre}', 'GenreController@edit');
Route::post('/genres/update/{genre}', 'GenreController@update');
Route::get('/genres/delete/{genre}', 'GenreController@delete');

Route::get('/', 'HomepageController@index')->name('home');

Route::prefix('book-service')->group(function(){
    Route::get('get-top-books', 'BookServiceController@getTopBooks');
    Route::get('get-book/{book}', 'BookServiceController@getBooks');
    Route::get('get-related-books/{book}', 'BookServiceController@getRelated');
});





