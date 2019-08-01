@extends('LogMaster')
    @section('title')
        Inscription
    @endsection

@section('cssCustom')
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles et Jquey-->
    <link rel="stylesheet" type="text/css" href="css/Login.css">
    <link rel="stylesheet" type="text/css" href="css/Choix.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection

@section('content')
    <!--Body -->
    <div class="container">
        <div class="row vertical-center" >
            <div class="col d-flex justify-content-center h-100 ">
                <a href="/inscriptionU" class="card custom-card titleHeader" style="color: #cd8511;">
                    <div class="card-header " style="padding-top: 35px;padding-bottom: 35px;">
                        <h1>Compte Normal</h1>
                        <img src="img/user.png" height="90px" width="90px">
                    </div>
                    <div class="card-body">
                        <p class="blanc">
                            Qu'est-ce que vous attendez pour créer un compte !
                        </p>
                        <br>
                    </div>
                </a>
            </div>
            <div class="col d-flex justify-content-center h-100 ">
                <a href="/inscriptionP" class="card custom-card titleHeader" style="color: #df1921">
                    <div class="card-header " >
                        <h1>Compte Partenaire </h1>
                        <img src="img/partenaires.png" height="70px" width="90px">
                    </div>
                    <div class="card-body">
                        <p class="blanc">
                            Devenez partenaire Fallo en quelques clics !
                        </p>
                        <br>
                        <h6 class="blanc">
                            En devenant partenaire Fallo en plus des avantages du compte normal vous avez la possibilité de publier des articles de diététique sur un site de plus de 100 millions d'utilisateurs à travers le monde.
                        </h6>
                        <br><br>
                    </div>

                </a>
            </div>
        </div>
    </div>
@endsection