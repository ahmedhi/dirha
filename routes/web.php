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

    Route::get('/deconnexion','CompteController@deconnexion');
});

Route::get('/co', function (){
    return view('contact');
});
//Midlleware to check admin acces
/*
Route::group([
   'middleware' => 'App\Http\Middleware\AdminMidthware'
], function (){

    Route::get('/config', function (){
        return view('adminMaster');
    });

Route::post('/co', function (){
    return back();
});
*/
Route::get('/00', 'ArticlesController@voir');

Route::post('/00', 'ArticlesController@nouveau');

Route::get('config', 'AdminController@index');

Route::get('client', 'AdminController@clientArray');

Route::get('partenaire', 'AdminController@partArray');

Route::get('/{email}','UserController@voir');
