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

Route::get('/AddLocataire', function () {
    return view('AddLocataire');
});


Route::get('/syndic/Immeuble', function () {
    return view('Addimeuble');
});

Route::get('/syndic/appartements', function () {
    return view('AddAppartement');
});
