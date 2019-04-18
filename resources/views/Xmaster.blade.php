<html>
<head>
    <!-- Specify the title -->
    <title>
        @yield('title')
    </title>

    <!-- FavIcon -->
    <link rel="icon" type="image/png" href="img/FalloSolo.png" />

    @yield('header-content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css" />
</head>

<style>

    html{
        background-image: url({{"img/plant-fruit-flower-ripe-food-red-1326960-pxhere.com.jpg"}});
        background-repeat: repeat-y;
        background-attachment: fixed;
        background-size: 100% 100% ;
    }

    inputForm{
        margin-left: 10%;
        margin-right: 10%;
        text-align: center;
        align-items: center;
    }

</style>

<body >
            <!-- Configuration of the NavBar -->
            <nav class="navbar" role="navigation" aria-label="main navigation" style=" position: fixed ; top: 0px; right: 0px ; left: 0px">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">
                        <img src="img/FalloSolo.png" width="100%">
                    </a>
                </div>

                <div class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item">
                            Acceuil
                        </a>

                        <a class="navbar-item" href="/">
                            Nos meilleurs consultants
                        </a>
                    </div>


                    <!-- try to have the path of the page
                          Les deux boutton pour s'inscrire et se connecter
                          ne seront pas visible si l'utilisateur
                          est au niveau de la page de connexion
                    -->
                    @if( !request()->is('connexion') )


                        <div class="navbar-end">
                            <div class="navbar-item">
                                <div class="buttons">

                                    @auth
                                        <a class="button is-primary" href="/mon-compte">
                                            Mon Compte
                                        </a>
                                        <a class="button is-danger" href="/deconnexion">
                                            Deconnectez vous
                                        </a>

                                    @else
                                        <a class="button is-primary" href="/inscription">
                                            <strong>S'inscire</strong>
                                        </a>
                                        <a class="button is-light" href="/connexion">
                                            Se connecter
                                        </a>
                                    @endauth

                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </nav>

            <div >


                <!--Content -->
                <div  >
                        <article class="card is-rounded"
                                 style="    position: relative;
                                            left : 25%;
                                            width: 50%;
                                            border-radius: 36px ;
                                            align-content: center">


                                              <div style="text-align: center;">

                              <!-- Insert Icon on the top of the form -->
                                <h1 class="title">
                                    <img src="img/FalloSolo.png" alt="logo" style=" position: relative ; height: 20% ; margin-top: 10%">
                                </h1>

                              <!-- Set the flash Message at the top of the page -->
                              <div class="container" style=" width: 50%">

                                  @include('flash::message')

                              </div>

                            @yield('content')


                            </div>
                        </article>
                    </div>

                </div>

            <!-- User Menu -->
            @if( auth()->check())

                <article class="card is-rounded"
                         style=" position: fixed ;
                                            left: 10% ;
                                            width: 15% ;
                                            top: 5% ;
                                            ">

                    <center>
                        <figure class="image is-128x128" style=" position: relative ">
                            <img class="is-rounded" src="img/profile-icon-def.png"  >
                        </figure>

                        <br><br><br><br>
                        <ul>
                            <li><strong>Nom d'utilisateur : </strong> <br>{{ auth()->user()->email }}
                            <li><strong>Date de création : </strong> <br>  {{ auth()->user()->created_at }}
                            <li><strong>Date de modification : </strong> <br>  {{ auth()->user()->updated_at }}
                        </ul>
                    </center>

                    <br><br><br><br><br><br><br>
                </article>

            @endif

                <!-- Publicité -->
                <article class="card is-rounded"
                         style=" position: fixed ;
                                                right: 10% ;
                                                width: 15% ;
                                                top: 5% ;
                                                ">

                    <center>
                        <img src="img/afficheTest3.jpg">
                        <br><br>
                        <img src="img/Collab1.jpg">
                    </center>
                </article>

            </div>

</body>




</html>
