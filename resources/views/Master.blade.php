<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Fallo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/FalloSolo.png" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/flaticon.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <link rel="stylesheet" href="css/style.css"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader">
        <img src="img/FalloSolo.png" alt="" class="iconeLoad">
        <h2>Chargement</h2>
    </div>
</div>


<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="img/FalloSolo.png" alt="" class="iconeLoad"><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="active"><a href="/">Acceuil</a></li>
            @auth()
                @if( auth()->user()->type === -1 || auth()->user()->type === 0)
                <li>
                    <a class="nav-link" href="/config">Dashboard<span class="sr-only">(current)</span></a>
                </li>
                 @endif
            <li ><a href="/menu">Menu</a></li>
            @endauth
            <li><a href="/Bestarticles">Nos meilleurs articles</a></li>
            <li><a href="#">Contact</a></li>

                @if( !request()->is('connexion') )

                    @auth
                                    <li @if( request()->is('mon-compte') or request()->is('infosPersonnels') or request()->is('modifInfos'))
                                        class="active"
                                            @endif>
                                        <a href="/mon-compte">
                                            Mon Compte
                                        </a>
                                    </li>
                                    <li>
                                        <a style="color: red;" href="/deconnexion">
                                            Déconnexion
                                        </a>
                                    </li>

                                @else
                                    @if( request()->is('inscription'))
                                        <li class="active">
                                        <a href="/inscription">
                                            <strong>Ajouter administrateur</strong>
                                        </a>
                                        </li>
                                    @else
                                        <li>
                                        <a style="color: #1f648b;" href="/inscription">
                                            <strong>S'inscire</strong>
                                        </a>
                                        </li>
                                    @endif
                                 <li>
                                    <a href="/connexion" style="color: green;">
                                        Se connecter
                                    </a>
                                </li>

                    @endauth
                @endif
        </ul>
    </nav>
</header>
<!-- Header section end -->


<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <!--
        <div class="hero-center">
            <img src="img/FalloSolo.png" alt="" style=" width: 404px ; height: 300px">
            <p>Get your freebie template now!</p>
        </div>
        -->
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        <div class="item  hero-item" data-bg="img/01.jpg"></div>
        <div class="item  hero-item" data-bg="img/02.jpg"></div>
    </div>
</div>
<!-- Intro Section -->


<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                <!-- single card -->
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="flaticon-023-flask"></i>
                        </div>
                        <h2>Get in the lab</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
                <!-- single card -->
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="flaticon-011-compass"></i>
                        </div>
                        <h2>Projects online</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
                <!-- single card -->
                <div class="col-md-4 col-sm-12">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="flaticon-037-idea"></i>
                        </div>
                        <h2>SMART MARKETING</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
                <h2>Get in <span>the Lab</span> and discover the world</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.</p>
                </div>
                <div class="col-md-6">
                    <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.</p>
                </div>
            </div>
            <div class="text-center mt60">
                <a href="" class="site-btn">Browse</a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="img/video.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=JgHfx2v9zOU" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->


<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <h2>What our clients say</h2>
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="img/avatar/01.jpg" alt="">
                            </div>
                            <div class="client-name">
                                <h2>Michael Smith</h2>
                                <p>CEO Company</p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="img/avatar/02.jpg" alt="">
                            </div>
                            <div class="client-name">
                                <h2>Michael Smith</h2>
                                <p>CEO Company</p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="img/avatar/01.jpg" alt="">
                            </div>
                            <div class="client-name">
                                <h2>Michael Smith</h2>
                                <p>CEO Company</p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="img/avatar/02.jpg" alt="">
                            </div>
                            <div class="client-name">
                                <h2>Michael Smith</h2>
                                <p>CEO Company</p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="img/avatar/01.jpg" alt="">
                            </div>
                            <div class="client-name">
                                <h2>Michael Smith</h2>
                                <p>CEO Company</p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="img/avatar/02.jpg" alt="">
                            </div>
                            <div class="client-name">
                                <h2>Michael Smith</h2>
                                <p>CEO Company</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->


<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>Get in <span>the Lab</span> and see the services</h2>
        </div>
        <div class="row">
            <!-- single service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="flaticon-023-flask"></i>
                    </div>
                    <div class="service-text">
                        <h2>Get in the lab</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
            <!-- single service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="flaticon-011-compass"></i>
                    </div>
                    <div class="service-text">
                        <h2>Projects online</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
            <!-- single service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="flaticon-037-idea"></i>
                    </div>
                    <div class="service-text">
                        <h2>SMART MARKETING</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
            <!-- single service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="flaticon-039-vector"></i>
                    </div>
                    <div class="service-text">
                        <h2>Social Media</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
            <!-- single service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="flaticon-036-brainstorming"></i>
                    </div>
                    <div class="service-text">
                        <h2>Brainstorming</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
            <!-- single service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="flaticon-026-search"></i>
                    </div>
                    <div class="service-text">
                        <h2>Documented</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
            <!-- single service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="flaticon-018-laptop-1"></i>
                    </div>
                    <div class="service-text">
                        <h2>Responsive</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
            <!-- single service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="flaticon-043-sketch"></i>
                    </div>
                    <div class="service-text">
                        <h2>Retina ready</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
            <!-- single service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="flaticon-012-cube"></i>
                    </div>
                    <div class="service-text">
                        <h2>Ultra modern</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- services section end -->


<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>Get in <span>the Lab</span> and  meet the team</h2>
        </div>
        <div class="row">
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/team/1.jpg" alt="">
                    <h2>Christinne Williams</h2>
                    <h3>Project Manager</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/team/2.jpg" alt="">
                    <h2>Christinne Williams</h2>
                    <h3>Junior developer</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/team/3.jpg" alt="">
                    <h2>Christinne Williams</h2>
                    <h3>Digital designer</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Section end-->


<!-- Promotion section -->
@guest()
<div class="promotion-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>Qu'attendez vous pour nous rejoindre !</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.</p>
            </div>
            <div class="col-md-3">
                <div class="promo-btn-area">
                    <a href="/inscription" class="site-btn btn-2">Inscrivez vous !</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endguest
<!-- Promotion section end-->


<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>Contactez nous</h2>
                </div>
                <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. </p>
                <h3 class="mt60">Coordonnée</h3>
                <p class="con-item"> Rabat Salé Kenitra <br> 12040 </p>
                <p class="con-item">+212 6 16 17 16 17</p>
                <p class="con-item">fallo@contact.com</p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form class="form-class" id="con_form">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="Your email">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="subject" placeholder="Subject">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->


<!-- Footer section -->
<footer class="footer-section">
    <h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
</footer>
<!-- Footer section end -->




<!--====== Javascripts & Jquery ======-->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/circle-progress.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
