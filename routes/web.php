<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*-
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
    return view('Locataires/AddLocataire');
});

Route::get('/Blocs', function () {
    return view('BLOCS/Bloc');
});

Route::get('/syndic/Locateur', function () {
    return view('Client/AddLocateur');
});




Route::get('/syndic/Immeuble', 'ImmeubleController@index');

Route::get('/syndic/Residence', 'ResidenceController@index');

Route::get('/syndic/Appartements', 'AppartementController@index');
Route::get('/syndic/Locataire', 'LocataireController@index');
Route::get('/syndic/Caisse', 'CaisseController@index');
//Route::get('/syndic/Locateur', 'LocateurController@index');
//Route::get('/syndic/Facture','FactureController@index');





Route::post('/getLocataireByCin', 'LocataireController@getLocataireByCin')->name('getLocataireByCin');
Route::post('/getLocataireByNomPrenom', 'LocataireController@getLocataireByNomPrenom')->name('getLocataireByNomPrenom');
Route::post('/getAppartementsDuLocataire', 'LocataireController@getAppartementsDuLocataire')->name('getAppartementsDuLocataire');
Route::post('/getCaisseByAppartement', 'CaisseController@getCaisseByAppartement')->name('getCaisseByAppartement');

//les rousources des methodes generer
// les routes des methode generer du controlleur create edit delete
Route::resource('/immeubles', 'ImmeubleController');
Route::resource('/residences', 'ResidenceController');
Route::resource('/villes', 'VilleController');
Route::resource('/Appartements', 'AppartementController');
Route::resource('/Syndics', 'SyndicController');
Route::resource('/Locataire', 'LocataireController');
Route::resource('/Caisse', 'CaisseController');
Route::resource('/Locateur', 'LocateurController');
Route::resource('/Facture', 'FactureController');




Route::get('qr-code-g', function () {

    \QrCode::size(500)
        ->format('png')
        ->generate('ItSolutionStuff.com', public_path('images/qrcode.png'));

    return view('qrCode');

});
