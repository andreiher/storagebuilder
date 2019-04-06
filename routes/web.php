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

// Pagina de inceput
Route::get('/', "HomeController@index")->name("home");


Route::get('/configurator', "HomeController@configurator")->name("configurator"); // configurator (cand nu are proiect)
Route::post('/configurator', "HomeController@proceseaza")->name("proceseaza"); // procesatorul de informatii din formular

Route::get('/trimite-proiect', "HomeController@trimiteProiect")->name("trimite-proiect");
Route::post('/trimite-proiect', "HomeController@proceseazaTrimiteProiect")->name("trimite-proiect-proceseaza");

Route::get('/confirmare-cerere', "HomeController@confirmare")->name("confirmare");


Route::get('/termeni-si-conditii', "HomeController@termenisiconditii")->name("termenisiconditii");
Route::get('/terms-and-conditions', "HomeController@termsandconditions")->name("termsandconditions");




Route::get('lang/{lang}', function ($lang) {
    \Session::put('lang', $lang);
    return redirect()->back();
});