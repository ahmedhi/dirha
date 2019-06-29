@extends('Master')

@section('title')
    Acceuil
@endsection

@section('content')

    <!-- Intro Section -->
    <div class="hero-section" id="m">
        <div class="hero-content">
            <div class="hero-center">
                <img src="img/FalloSolo.png" alt="" style=" width: 150px ; height: 160px">
                <p style="margin-top: -18px; color: #2d324b;
                   text-shadow: 10px 10px 10px #2d324b;
                   font-size: 80px;
                   line-height: 1.3;">Jamais abandonné il n'est jamais trop tard pour reprendre contrôle de ton corps</p>
            </div>
        </div>
        <!-- slider -->
        <div id="hero-slider" class="owl-carousel">
            <div class="item  hero-item" data-bg="img/background00.jpg"></div>
            <div class="item  hero-item" data-bg="img/background01.jpg"></div>
        </div>
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


        <!-- Articles section -->
        <div class="testimonial-section pb100">
            <!-- <div class="test-overlay"></div> Image -->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title ">
                            <h2>Derniers articles</h2>
                        </div>
                        <div class="owl-carousel" id="testimonial-slide">
                        @foreach( $articles as $article)
                            <!-- single testimonial -->
                                <div class="testimonial">
                                    <h2 style="text-align: center ; color: whitesmoke;" >{{ $article->title }}</h2>
                                    <br>
                                    <p style="height: 100px ; overflow: hidden ">{{ $article->description }}</p>
                                    <br>
                                    <a href="voirplusArticle/{{$article->article_id}}" >Voir plus ...</a>
                                    <div class="client-info">
                                        <div class="avatar">
                                            <img src="UserImage/{{$article->users->img}}" alt="">
                                        </div>
                                        <div class="client-name">
                                            <h2>{{$article->users->nom}}</h2>
                                            <p>Source : {{$article->source}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Articles section end-->

        <!-- Team Section -->
        <div class="team-section spad">
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title">
                    <h2>Rencontrer les <span>FALLO</span> Developers</h2>
                </div>
                <div class="row">
                    <!-- single member -->
                    <div class="col-sm-4">
                        <div class="member">
                            <img src="img/team/dev3.jpg" alt="" style="">
                            <h2>HILALI Ahmed</h2>
                            <h3>Co-Fondateur</h3>
                        </div>
                    </div>
                    <!-- single member -->
                    <div class="col-sm-4">
                        <div class="member">
                            <img src="img/askour.jpg" alt="">
                            <h2>ASKOUR Hamza</h2>
                            <h3>Co-Fondateur</h3>
                        </div>
                    </div>
                    <!-- single member -->
                    <div class="col-sm-4">
                        <div class="member">
                            <img src="img/team/3.jpg" alt="">
                            <h2>JORIO Ali</h2>
                            <h3>ENCADRANT</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Section end-->


@endsection