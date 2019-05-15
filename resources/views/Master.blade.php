<html>
<head>
    <!-- Specify the title -->
    <title>
        @yield('title')
    </title>

    <!-- FavIcon -->
    <link rel="icon" type="image/png" href="img/FalloSolo.png" />

    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="js/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

@yield('header-content')

<!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Master.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>

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
            @auth
                @if( auth()->user()->type === -1 || auth()->user()->type === 0)
                    <li class="nav-item active">
                        <a class="nav-link" href="/config">Dashboard<span class="sr-only">(current)</span></a>
                    </li>
                @endif
            @endauth

            <li class="nav-item active">
                <a class="nav-link" href="/">Acceuil <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/00">Nos meilleurs articles <span class="sr-only">(current)</span></a>
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
                        @if( request()->is('inscription'))
                            <a class="btn btn-outline-success" href="/inscription">
                                <strong>Ajouter administrateur</strong>
                            </a>
                        @else
                        <a class="btn btn-outline-success" href="/inscription">
                            <strong>S'inscire</strong>
                        </a>
                        @endif
                        <a class="btn btn-outline-secondary" href="/connexion">
                            Se connecter
                        </a>
                    @endauth

                </div>
            </div>
        </div>
    @endif
</nav>

<div class="container-fluid text-center" style=" position: relative ; top: 100px ;">
    <div class="row">

        <!-- User Menu | Visible que si l'utilisateur est connecté-->
        @if( auth()->check())
            <div class="card content CardColLeft">
                <figure style=" position: relative ">
                    <img src="UserImage/profile-icon-png-898.png" class="img-thumbnail" style="position: relative ; padding-top: 25px">
                </figure>

                <br><br><br><br>
                <li><strong>Nom d'utilisateur : </strong> <br>{{ auth()->user()->email }}
                    <br>
                <li><strong>Date de création : </strong> <br>  {{ auth()->user()->created_at }}
                    <br>
                <li><strong>Date de modification : </strong> <br>  {{ auth()->user()->updated_at }}
                    <br><br>
            </div>
    @endif
    <!-- Content -->
        <div class="card col-sm-6 text-left  DivContent" >

            <!-- Image Fallo -->
            <img src="img/FalloSolo.png" class="imgIcon" >

            @yield('content')

        </div>
        <!-- ADS Bar -->
        <div class="CardColRight" >
            <center>
                <img src="img/ADSHan.jpg" class="imgADSF">
                <img src="img/ADSFallo.png" class="imgADSL">
            </center>
        </div>

    </div>
</div>




<script src="js/bootstrap.min.js"></script>

</body>




</html>
