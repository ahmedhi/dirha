<html>
<head>
    <title>
        Inscription
    </title>
    <!-- FavIcon -->
    <link rel="icon" type="image/png" href="img/FalloSolo.png" />

    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="js/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles et Jquey-->
    <link rel="stylesheet" type="text/css" href="css/Login.css">
    <link rel="stylesheet" type="text/css" href="css/Choix.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <!-- NavBar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">

    <div class="navbar-brand">
        <a class="navbar-brand" href="/">
            <img src="img/FalloSolo.png" width="30" height="30" class="d-inline-block align-top">
            Fallo
        </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Acceuil <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/">Nos meilleurs articles <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>


    <!-- try to have the path of the page
          Les deux boutton pour s'inscrire et se connecter
          ne seront pas visible si l'utilisateur
          est au niveau de la page de connexion
    -->



    @if( !request()->is('connexion') )


        <div class="my-2 my-lg-0">
            <div class="navbar-brand">
                <div class="buttons">

                    @auth
                        <a class="" href="/mon-compte">
                            Mon Compte
                        </a>
                        <a class="btn btn-danger" href="/deconnexion">
                            Déconnexion
                        </a>

                    @else
                        <a class="btn btn-outline-success" href="/inscription">
                            <strong>S'inscire</strong>
                        </a>
                        <a class="btn btn-outline-secondary" href="/connexion">
                            Se connecter
                        </a>
                    @endauth

                </div>
            </div>
        </div>
    @endif
</nav>

    <!--Body -->
    <div class="container">
        <div class="row" >
            <div class="col d-flex justify-content-center h-100 ">
                <a href="/inscriptionU" class="card custom-card titleHeader" style="color: #cd8511;">
                    <div class="card-header ">
                        Compte Normal
                    </div>
                    <div class="card-body">
                        <p class="blanc">
                            Quesque vous attender pour crée un compte !
                        </p>
                        <br>
                        <h6 class="blanc">
                            Eodem tempore etiam Hymetii praeclarae indolis viri negotium est actitatum, cuius hunc
                            novimus esse textum. cum Africam pro consule regeret Carthaginiensibus victus inopia iam
                            lassatis, ex horreis Romano populo destinatis frumentum dedit, pauloque postea cum provenisset
                            segetum copia, integre sine ulla restituit mora.

                        </h6>

                    </div>
                </a>
            </div>
            <div class="col d-flex justify-content-center h-100 ">
                <a href="/inscriptionP" class="card custom-card titleHeader" style="color: #df1921">
                    <div class="card-header " >
                        <h1>Compte Partenaire </h1>
                    </div>
                    <div class="card-body">
                        <p class="blanc">
                            Devenez partenaire Fallo en quelque clic !
                        </p>
                        <br>
                        <h6 class="blanc">
                            En devenant partenaire Fallo en plus des avantages du compte normal vous avez la possibilité
                            de publier des articles de diétetiques et ainsi donner la possibilité à plus de 100 millions
                            d'utilisateur à travers le monde.
                        </h6>
                        <br><br>
                        <p>
                            <i class="fas fa-exclamation-circle "></i>
                            <h6>
                            Il faut avoir un minimum de connaisance en medecine pour devenir partenaire Fallo
                        </h6>
                        </p>

                    </div>

                </a>
            </div>
        </div>
    </div>

</body>

</html>