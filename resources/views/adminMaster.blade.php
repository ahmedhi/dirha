<html>
<head>
    <title>
        @yield('title')
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
    <link rel="stylesheet" type="text/css" href="css/Admin.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            font-family: "Lato", sans-serif;
            transition: background-color .5s;
        }

        .sidenav {
            height: auto;
            width: 0;
            position: fixed;
            z-index: 10;
            top: 25%;
            left: 0;
            background-image: url(/img/LateWallpaper.png);
            background-size: 250px 420px;
            background-position: center;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            border-radius: 0px 40px 40px 0px;

        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            left: -25px;
            font-size: 36px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
        </style>
</head>

<body>
<div class="card" style="border-radius: 36px;">
    <div id="mySidenav" class="sidenav">
        <div class="card-header">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style=" color: green">&times;</a>
    </div>

    <div class="card-body">
        <a href="#" class="rubrique"><strong>Acceuil</strong></a>
            <br>
        <a href="#" class="rubrique"><strong>Liste d'attente</strong></a>
            <br>
        <a href="#" class="rubrique"><strong>Liste Client</strong></a>
            <br>
        <a href="#" class="rubrique"><strong>Liste Partenaire</strong></a>
        </div>
    </div>

</div>

<!-- NavBar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="position: relative ; z-index: 9;">

    <div class="navbar-brand">

        <div class="navbar-brand">
            <i class="fas fa-ellipsis-v " onclick="openNav()"></i>
        </div>
        <a class="navbar-brand">
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

<div class="container-fluid">
<div>
    TEST
</div>

</div>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
    }
</script>


</body>

</html>