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

Route::get('/inscription', 'InscriptionController@form');

Route::get('/inscriptionP', 'InscriptionController@Partenaire');

Route::post('/inscriptionP' , 'InscriptionController@AddPart');

Route::get('/inscriptionU', 'InscriptionController@Utilisateur');

Route::post('/inscriptionU' , 'InscriptionController@AddUser');

Route::get('/connexion' , 'ConnexionController@form');

Route::post('/connexion' , 'ConnexionController@traitement');

Route::get('/' , 'UserController@liste');

Route::group([

    'middleware' => 'App\Http\Middleware\Auth',

], function (){
    Route::get('/mon-compte','CompteController@acceuil');

    Route::post('/modification-mot-de-passe','CompteController@ChangePwd');

    Route::post('/messages','MessagesController@new');

    Route::get('/deconnexion','CompteController@deconnexion');
});


Route::get('/co', function (){
    return view('adminMaster');
});


Route::get('/{email}','UserController@voir');
