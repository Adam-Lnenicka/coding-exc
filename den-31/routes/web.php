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

Route::get('/api/books', 'APIBookController@index');

Route::get('/books','TestController@index');

Route::get('/books','BookController@index');

Route::get('/eshop/categories/{id}', 'EshopController@category');
Route::post('/categories','CategoryController@store');
Route::post('/categories','CategoryController@store')

<a href="action{{Subcategories}}"

