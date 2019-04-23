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
            height: 100%;
            width: 15%;
            position: fixed;
            z-index: 10;
            left: 0;
            background-image: url(/img/LateWallpaper.png);
            background-size: 100% 70%;
            background-position: center;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;

        }

        .sidenav a {
            color: white;
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            display: block;
            transition: all .5s;
        }
        .sidenav a:hover {
          font-size: 20px;
            letter-spacing: 5px;
            color:red;
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
<!-- NavBar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="box-shadow: 5px 4px 10px 3px #888; position: relative ; z-index: 9;">

    <div class="navbar-brand">
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



</nav>
<div class="sidenav">
    <ul>
        <il>
            <a href="/config">Acceuil</a>
        </il>
        <il>
            <a href="#">Liste des demandes</a>
        </il>
        <il>
            <a href="/client">Liste Client</a>
        </il>
        <il>
            <a href="/partenaire">Liste Partenaire</a>
        </il>
        <il>
            <a href="#">Liste Aliment</a>
        </il>
    </ul>

</div>
<div class="highSide" >
    <div class="ColorBack">
        <div class="container ColorBack">
            <div class="row">
                <div class="col" >
                    <div class="card">
                        <div class="card-header">
                            Nombre d'utilisateur
                        </div>
                        <div class="card-body">
                            Il y a {{ $numUser }} utilisateurs
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Nombre de Partenaire
                        </div>
                        <div class="card-body">
                            Il y a {{ $numPart }} partenaires
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Nombre de demande en attente
                        </div>
                        <div class="card-body">
                            actuellement il n'y a pas de demande en attente
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br>
    <div class="container">
        @yield('content')
    </div>

</div>

<!--
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
-->

</body>

</html>