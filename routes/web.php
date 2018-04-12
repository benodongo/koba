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
//
//Route::get('/', function () {
//    return view('index');
//});
//routes for html pages
Route::get('/','MainController@index');
Route::get('/about','MainController@about');
Route::get('/products','MainController@products');
Route::get('/contact','MainController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
