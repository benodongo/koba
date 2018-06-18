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
//loan form
Route::get('/loanApplication','LoanController@index');
Route::get('/investor','LoanController@investor');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/applicants/step1', 'ApplicantController@createStep1');
Route::post('/applicants/step1', 'ApplicantController@postcreateStep1');
Route::get('/myloans', 'ApplicantController@myloans');
Route::get('/applicants/step2', 'ApplicantController@createStep2');
Route::post('/applicants/step2', 'ApplicantController@postcreateStep2');
Route::get('/applicants/step3', 'EmployementController@createStep3');
Route::post('/applicants/step3', 'EmployementController@postcreateStep3');
Route::get('/applicants/step4', 'GuarantorsController@createStep4');
Route::post('/applicants/step4', 'GuarantorsController@postcreateStep4');
