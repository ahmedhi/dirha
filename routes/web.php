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

Route::get('/' , 'UserController@liste');

Route::group([

    'middleware' => 'App\Http\Middleware\Auth',

], function (){
    Route::get('/mon-compte','CompteController@acceuil');

    Route::get('/infosPersonnels','CompteController@infos');

    Route::get('/modifInfos','CompteController@formodif');


    Route::post('/modification-mot-de-passe','CompteController@ChangePwd');

    Route::get('/deconnexion','CompteController@deconnexion');
});

Route::group([ //Need to be a guest to have permission to view this pages
    'middleware' => 'App\Http\Middleware\Guest',
], function (){
    Route::get('/inscription', 'InscriptionController@form');

    Route::get('/inscriptionP', 'InscriptionController@Partenaire');

    Route::post('/inscriptionP' , 'InscriptionController@AddPart');

    Route::get('/inscriptionU', 'InscriptionController@Utilisateur');

    Route::post('/inscriptionU' , 'InscriptionController@AddUser');

    Route::get('/SUADD' , 'InscriptionController@SU');

    Route::post('/SUADD' , 'InscriptionController@AddSu');

    Route::get('/connexion' , 'ConnexionController@form');

    Route::post('/connexion' , 'ConnexionController@traitement');

});


Route::get('/co', function (){
    return view('contact');
});

//Midlleware to check admin acces

Route::group([
   'middleware' => 'App\Http\Middleware\AdminMidthware'
], function (){

    Route::get('config', 'AdminController@index');

    Route::get('/inscriptionA' , 'InscriptionController@Admin');

    Route::post('/inscriptionA' , 'InscriptionController@AddAdmin');

    Route::get('/client', 'AdminController@clientArray');

    Route::get('/partenaire', 'AdminController@partArray');

    Route::get('/fixpartenaire', 'AdminController@checkPartenaire');

});

Route::get('/00', 'ArticlesController@voir');

Route::post('/00', 'ArticlesController@nouveau');

Route::get('/00', 'ArticlesController@voir');

Route::post('/00' , 'ArticlesController@nouveau');

Route :: get('/contact','CompteController@cnt');

Route ::post('/mp','CompteController@modifpass');

Route::post('/mi','CompteController@modifinf');

Route :: post('/sendMail','CompteController@sendemail');

Route::get('/{email}','UserController@voir');

