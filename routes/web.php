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
    return view('index');
});

Route::get('/Locataire', function () {
    return view('AddLocataire');
});


Route::get('/syndic/Immeuble', 'ImmeubleController@index');

Route::get('/syndic/appartements', function () {
    return view('AddAppartement');
});

//les rousources des methodes generer
// les routes des methode generer du controlleur create edit delete 
Route::resource('/immeubles', 'ImmeubleController');
Route::resource('/villes', 'VilleController');
Route::resource('/Appartements', 'AppartementController');
Route::resource('/Syndics', 'SyndicController');
