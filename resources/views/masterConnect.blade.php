<html>
    <head>
        <title>
          @yield('title')
        </title>

        <!-- CSS FILE-->
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/test.css" >
    </head>

  <body>

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


           <div class="bg">
               <!--Content -->
              <div  class="">
                  <article class="card"
                           style="    position: relative;
                                                    left : 25%;
                                                    width: 50%;
                                                    border-radius: 36px ;
                                                    align-content: center">


                      <div class="container-fluid" style="text-align: center;">

                          <!-- Insert Icon on the top of the form -->
                          <h1 class="title">
                              <img src="img/FalloSolo.png" alt="logo" style=" position: relative ; height: 20% ; margin-top: 10%">
                          </h1>

                          <!-- Set the flash Message at the top of the page -->
                          <div class="container" style=" width: 50%">

                              @include('flash::message')

                          </div >

                          @yield('content')


                      </div>
                  </article>
              </div>
           </div>

          </div>

  </body>
</html>