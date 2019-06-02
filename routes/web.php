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

use App\aliment;
use App\menu;

Route::get('/' , 'UserController@liste');

Route::get('/Bestarticles', 'ArticlesController@voir');

Route::post('/Bestarticles', 'ArticlesController@nouveau');

Route::get('/article','UserController@voir');

Route::group([

    'middleware' => 'App\Http\Middleware\Auth',

], function (){
    Route::get('/mon-compte','CompteController@acceuil');

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

    Route::get('/accept/{id}', 'AdminController@AddP');

    Route::get('/delete/{id}', 'AdminController@DeleteP');

    Route::get('/aliment','AlimentsController@voirAliment');

    Route::post('/aliment','AlimentsController@addAliment');

});

Route::get('/menu','UserController@MenuListe');

Route::get('/getaliment', function (){
    $SelectAliment = aliment::where('aliment_id',intval($_GET['id']))->firstOrfail();
    return view('alimentSpec',[
        'Aliment' => $SelectAliment,
    ]);
});

//actumenu?id="+id+"nbr="+ al;

Route::get('/actumenu', function (){
    return "test";
    $menu = menu::where('proprietaire_id', auth()->user()->id)->get();
    if(count($menu) === 0){
        $me = menu::create([
            'type_repas' => intval($_GET['type']) ,
            'proprietaire_id' => auth()->user()->id ,
            'aliments' => intval($_GET['nom']) . ":" . intval($_GET['nbr']),
        ]);
    }
    $SpecMenu = new menu;
    foreach ( $menu as $me){
        if( $me->type_repas === intval($_GET['type'])){
            $SpecMenu = $me;
            }
    }

    //Structure DB : id1:Qt1 id2:Qt2 id3:Qt3 ...

    $aliments = explode(" ", $SpecMenu->aliments ); //decomposer la chaine en separant les aliments
    $newaliment = "";
    $Check = false ;
    foreach ( $aliments as $aliment){
        list( $Al , $Quant ) = explode( ":" , $aliment); // decomposer les aliments en id et quantite
        if( $Al === intval($_GET['nom'])){
            $newaliment = $newaliment . " " . $Al . ":" . intval($_GET['nbr']) ;
            $Check = true;
            }
        else{
            $newaliment = $newaliment . " " . $Al . ":" . $Quant ;
            }
    }
    if( !$Check ){
        $newaliment = $newaliment . " " . intval($_GET['nom']) . ":" . intval($_GET['nbr']) ;
    }

    $SpecMenu->aliments = $newaliment ;
    $SpecMenu->save();
    return view('menuPerso',[
            'aliments' => $aliments,
        ]);
});

Route::get('00', function (){
    $menu = menu::where('proprietaire_id', auth()->user()->id)->where('type_repas',2 )->get();
    if(count($menu) === 0){
        $me = menu::create([
            'type_repas' => 2 ,
            'proprietaire_id' => auth()->user()->id ,
            'aliments' => 'NULL',
        ]);
    }
    dump( $me );
});

Route::get('/menu/{id}', function ($id){

    return $id;
});

