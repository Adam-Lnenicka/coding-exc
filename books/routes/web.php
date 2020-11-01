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

Route::get('/api', 'ApiController@index');
Route::get('/api/book', 'ApiBookController@index');
Route::get('/eshop','EshopController@index');

Route::get('/bookshop','BookshopController@index');
Route::get('/bookshop/create','BookshopController@create');
Route::post('/bookshop','BookshopController@store');