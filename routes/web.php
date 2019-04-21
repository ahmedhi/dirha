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

Route::post('/inscription' , 'InscriptionController@Traitement');

Route::get('/connexion' , 'ConnexionController@form');

Route::post('/connexion' , 'ConnexionController@traitement');

Route::get('/' , 'UserController@liste');

Route::group([

    'middleware' => 'App\Http\Middleware\Auth',

], function (){
    Route::get('/mon-compte','CompteController@acceuil');

    Route::post('/modification-mot-de-passe','CompteController@ChangePwd');

    Route::post('/articles','ArticlesController@nouveau');

    Route::get('/deconnexion','CompteController@deconnexion');
});

Route :: view ('/00', 'acceuil');

Route::get('/co', function (){
    return view('contact');
});

Route::post('/co', function (){
    return back();
});
Route:: post('/00',function(){

    request()->validate([
        'title' => ['requered'],
        'article'=> ['requered'],
        'source'=>  ['requered'],
    ]);

    $artcl =  app\Article:: create([
        'title' => request('title'),
        'source'=> request('source'),
        'description'=>request('article'),
        'Like' => 0,
        'Dislike' => 0 ,

    ]);

    return "Nous avons reçu votre article " ;
});

Route::get('/{email}','UserController@voir');
