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

Route::get('/', 'PostController@index');
Route::post('/create', 'PostController@store')->middleware('auth');
Route::get('/create', 'PostController@create')->name('create')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
