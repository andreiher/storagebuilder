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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', "HomeController@index")->name("home");
Route::get('/step1', "HomeController@step1")->name("step1");
Route::get('/step2', "HomeController@step2")->name("step2");
Route::post('/step2', "HomeController@step2")->name("step2");
Route::get('/step3', "HomeController@step3")->name("step3");
Route::post('/summary', "HomeController@summary")->name("summary");



Route::get('/desprenoi', "HomeController@desprenoi")->name("desprenoi");