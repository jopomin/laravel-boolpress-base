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

Route::get('/', 'MainController@index')->name('page-home');
/* Route::get('/articoli', 'MainController@posts')->name('page-posts'); */
/* Route::get('/articoli', function () {
    return view('articoli');
    }); */
Route::resource('/articoli', 'PostController');