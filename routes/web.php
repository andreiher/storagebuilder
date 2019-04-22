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

// homepage
Route::get('/', "HomeController@index")->name("home");


Route::get('/configurator', "HomeController@configurator")->name("configurator"); 
Route::post('/configurator', "HomeController@proceseaza")->name("proceseaza");

Route::get('/trimite-proiect', "HomeController@trimiteProiect")->name("trimite-proiect");
Route::post('/trimite-proiect', "HomeController@proceseazaTrimiteProiect")->name("trimite-proiect-proceseaza");

Route::get('/confirmare-cerere', "HomeController@confirmare")->name("confirmare");


Route::get('/termeni-si-conditii', "HomeController@termenisiconditii")->name("termenisiconditii");
Route::get('/terms-and-conditions', "HomeController@termsandconditions")->name("termsandconditions");

// Language Switch
Route::get('lang/{selected_language}', function ($selected_language) {
    \Session::put('lang', $selected_language);
    return redirect()->back();
});
