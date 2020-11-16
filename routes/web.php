<?php

use App\Mail\QR;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', 'DashboardController@index');

Route::get('/Locataire', function () {
    return view('Locataires/AddLocataire');
});

Route::get('/Locataire/Caisse', function () {
    return view('Caisses/caisselocataire');
});

// Route::get('/Blocs', function () { // Lah ymskhek 👌👈
//     return view('Blocs/Bloc');
// });


//Route::get('/Residence', function () {
//    return view('Residences/getresidence');
//});


Route::get('Residence', [
    'uses' => 'ResidenceController@index',
    'as' => 'student-list'
]);


//Route::get('/syndic/Locateur', function () {
//    return view('Client/AddLocateur');
//});
//


//Route::get('/syndic/Securite', function () {
//    return view('Securite/AddSecurite');
//});

Route::get('/email', function () {
    return new WelcomeMail();
});
Route::get('/QR', function () {
    return new QR();
});

Route::get('/Securite/Scanner', function () {
    return view('Securite/scanner');
});

Route::get('/syndic/Profile', 'SyndicController@index');
Route::get('/syndic/Immeuble', 'ImmeubleController@index');
Route::get('/syndic/Residence', 'ResidenceController@index');
Route::get('/syndic/Locateur', 'LocateurController@index');
Route::get('/syndic/Securite', 'SecuriteController@index');
Route::get('/syndic/Facture', 'FactureController@index');
Route::get('/syndic/Appartements', 'AppartementController@index');





Route::get('/syndic/Locataire', 'LocataireController@index');

// Auth::routes(['verify' => true]);
// Route::get('/syndic/Locataire', 'LocataireController@index')->name('home');


Route::get('/syndic/Caisse', 'CaisseController@index');
Route::post('/getLocataireByCin', 'LocataireController@getLocataireByCin')->name('getLocataireByCin');
Route::post('/getLocataireByNomPrenom', 'LocataireController@getLocataireByNomPrenom')->name('getLocataireByNomPrenom');
Route::post('/getAppartementsDuLocataire', 'LocataireController@getAppartementsDuLocataire')->name('getAppartementsDuLocataire');
Route::post('/getCaisseByAppartement', 'CaisseController@getCaisseByAppartement')->name('getCaisseByAppartement');
Route::get('/Auth-Login', 'AuthentificationController@loginView')->name('Auth-Login-Get');
Route::post('/Auth-Login', 'AuthentificationController@loginSecurity')->name('Auth-Login-Post');
Route::get('/Auth-Logout', 'AuthentificationController@LogOut')->name('Auth-LogOut');
Route::post('/getQrCode/{id_locateur}', 'LocateurController@generateQR');

Route::post('/syndic/Bloc/Modif/{idBloc}', 'BlocController@update')->name("Modif-Bloc");
Route::post('/syndic/Bloc/Suppr/{idBloc}', 'BlocController@destroy')->name("Suppr-Bloc");
Route::post('/syndic/Bloc/Nouveau', 'BlocController@store')->name("Ajout-Bloc");

Route::get('/test', 'DashboardController@pourcentage_appartement_non_paye');

// Route::get('/chart', function () {
//     $chart = (new LarapexChart)->setTitle('Users')->setXAxis(['Active', 'Guests'])->setDataset([50]);
//     return view('chart', compact('chart'));
// });

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
Route::resource('/Securite', 'SecuriteController');


//
//Route::get('/qr-code-g', function () {
//    return view('qrCode');
//});
