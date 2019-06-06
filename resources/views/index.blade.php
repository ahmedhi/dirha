@extends('Master')

@section('title')

@endsection

@section('content')

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
                                <img src="fonts/002-doctor.png">
                            </div>
                            <h2>Partenaires Fallo Corp</h2>
                            <p>Fallo a essayé de chercher les meilleures médecins du Maroc et d'Europe pour regrouper un immense savoir pour sa communauté</p>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <img src="fonts/001-fruit.png">
                            </div>
                            <h2>Diététique</h2>
                            <p>La diététique est une pratique qui s'intéresse à l’alimentation équilibrée. Si la nutrition se définit comme la science qui analyse les rapports entre la nourriture et la santé, la diététique y intègre une dimension culturelle liée aux pratiques alimentaires.

                                La nutrition est la science qui étudie les aliments et leurs effets sur l’être humain, tandis que la diététique est l’étude de l’ensemble des règles qui doivent régir l’alimentation de l’être humain. </p>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col-md-4 col-sm-12">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="flaticon-011-compass"></i>
                            </div>
                            <h2>SMART Diététique</h2>
                            <p>Tout est calculé rien n'est laissé au hasard le client et le centre de l'algorithme. Tous nos programmes sont personnalisés jusqu'au moindre détail.</p>
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
                        <h2>Les avis de nos clients</h2>
                    </div>
                    <div class="owl-carousel" id="testimonial-slide">
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>Je m'attendais pas à un résultat pareil. J'ai pu atteindre l'objectif que je désirai</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="img/avatar/01.jpg" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>AFFACH Nahid</h2>
                                    <p>Cliente depuis 2017</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial section end-->

    <!-- Services section
    <div class="services-section spad">
        <div class="container">
            <div class="section-title dark">
                <h2>Get in <span>the Lab</span> and see the services</h2>
            </div>
            <div class="row">
                single service
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
                single service
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
            </div>
            <div class="text-center">
                <a href="" class="site-btn">Browse</a>
            </div>
        </div>
    </div>
     services section end -->



    <!-- Team Section -->
    <div class="team-section spad">
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title">
                <h2>Rencontrer <span>FALLO</span> les fondateur</h2>
            </div>
            <div class="row">
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/dev3.jpg" alt="">
                        <h2>HILALI Ahmed</h2>
                        <h3>Co-Fondateur</h3>
                    </div>
                </div>
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/2.jpg" alt="">
                        <h2>ASKOUR Hamza</h2>
                        <h3>Co-Fondateur</h3>
                    </div>
                </div>
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/3.jpg" alt="">
                        <h2>JORIO Mehdi</h2>
                        <h3>ENCADRANT</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Section end-->


@endsection