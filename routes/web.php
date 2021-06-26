<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContentController; 

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

Route::get('/', function () {  //root
    return view('welcome');
});


Route::get('/home', 'HomeController@home');
Route::get('/contenuti', 'ContentController@carica_contenuti');

Route::get('/contattaci', 'HomeController@contattaci');
Route::post('/contattaci', 'ContentController@invia_messaggio');
Route::get('avviso', 'HomeController@avviso');

Route::get('/news', 'HomeController@news');
Route::get('/news/api', 'ContentController@trovaNotizie');

Route::get('/servizi', 'HomeController@servizi');

Route::get('/listadottori', 'ContentController@carica_dati_dottori');


Route::get('/signup', 'RegisterController@signup');  //il controller RegisterController ci ritorna semplicemente la view
Route::get('/controlloEmailSignup/{input}', 'RegisterController@checkEmail');
Route::post('/signup', 'RegisterController@create');  //quando submittiamo il form il controller RegisterController esegue la funzione create


Route::get('/login', 'LoginController@visualizza_login'); 
Route::get('/controlloEmailLogin/{input}', 'LoginController@checkEmail'); 
Route::post('/login', 'LoginController@checkLogin'); //usiamo le view per visualizzare la risposta
Route::get('/logout', 'LoginController@logout');

Route::get('/profilo', 'ContentController@visualizza_profilo');

Route::get('/ritornaPreferiti', 'ContentController@carica_Preferiti');
Route::get('/aggiungiPreferiti', 'ContentController@aggiungi_Preferiti');  
Route::get('/rimuoviPreferiti', 'ContentController@rimuovi_Preferiti');


