@extends('Master')

@section('title')
    Acceuil
@endsection

@section('content')

    <!-- Intro Section -->
    <div class="hero-section" id="m">
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
                <div></div>
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
                    <div class="col-md-4 col-sm-6">$
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
        <!-- Articles section -->
        <div class="testimonial-section pb100">
            <!-- <div class="test-overlay"></div>  Image -->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title left">
                            <h2>Articles</h2>
                        </div>
                        <div class="owl-carousel" id="testimonial-slide">
                            <div class="col">
                                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                    <div class="card-body d-flex flex-column align-items-start">
                                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                                        <h6 class="mb-0">
                                            <a class="text-dark" href="#">40 Percent of People Can’t Afford Basics</a>
                                        </h6>
                                        <div class="mb-1 text-muted small">Nov 12</div>
                                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="btn btn-outline-primary btn-sm" role="button" href="http://www.jquery2dotnet.com/">Continue reading</a>
                                    </div>
                                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/arch" style="width: 200px; height: 250px;">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                    <div class="card-body d-flex flex-column align-items-start">
                                        <strong class="d-inline-block mb-2 text-success">Health</strong>
                                        <h6 class="mb-0">
                                            <a class="text-dark" href="#">Food for Thought: Diet and Brain Health</a>
                                        </h6>
                                        <div class="mb-1 text-muted small">Nov 11</div>
                                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/">Continue reading</a>
                                    </div>
                                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: 250px;">
                                </div>
                            </div>

                            <div class="col">
                                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                    <div class="card-body d-flex flex-column align-items-start">
                                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                                        <h6 class="mb-0">
                                            <a class="text-dark" href="#">40 Percent of People Can’t Afford Basics</a>
                                        </h6>
                                        <div class="mb-1 text-muted small">Nov 12</div>
                                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="btn btn-outline-primary btn-sm" role="button" href="http://www.jquery2dotnet.com/">Continue reading</a>
                                    </div>
                                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/arch" style="width: 200px; height: 250px;">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                    <div class="card-body d-flex flex-column align-items-start">
                                        <strong class="d-inline-block mb-2 text-success">Health</strong>
                                        <h6 class="mb-0">
                                            <a class="text-dark" href="#">Food for Thought: Diet and Brain Health</a>
                                        </h6>
                                        <div class="mb-1 text-muted small">Nov 11</div>
                                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                        <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/">Continue reading</a>
                                    </div>
                                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: 250px;">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- Articles section end-->

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
                        <img src="img/askour.jpeg" alt="">
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