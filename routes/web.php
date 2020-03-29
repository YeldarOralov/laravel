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

Route::get('/book/{book}', 'HomeController@editPage');
Route::post('/book/edit/{book}', 'HomeController@edit');

Route::get('/create', 'HomeController@createPage');
Route::post('/book/create', 'HomeController@create');

Route::post('/book/delete/{book}', 'HomeController@delete');
