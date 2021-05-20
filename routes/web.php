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

Route::get('/', function () {
    return view('welcome');
});
Route::get('books', 'BooksController@getAllBooks');
Route::get('books/{id}', 'BooksController@getBook');
Route::post('books', 'BooksController@createBook');
Route::put('books/{id}', 'BooksController@updateBook');
Route::delete('books/{id}', 'BooksController@deleteBook');