
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <!-- FavIcon -->
    <link rel="icon" type="image/png" href="img/FalloSolo.png" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Aministrateur
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/assets/demo/demo.css" rel="stylesheet" />
    @yield('refsheet')
</head>

<body>
<div class="wrapper " >
    <div class="sidebar" data-color="red">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
            <a href="/" class="simple-text logo-mini" style="margin-right: 25px;margin-left: 55px;">
                <img src="img/FalloSolo.png" width="30" height="30" class="d-inline-block align-top">
            </a>
            <a href="/" class="simple-text logo-normal">
                <strong>Fallo</strong>
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
                <li class="active ">
                    <a href="/config">
                        <i class="now-ui-icons business_bank"></i>
                        <p>Acceuil</p>
                    </a>
                </li>
                <li>
                    <a href="/fixpartenaire">
                        <i class="now-ui-icons education_atom"></i>
                        <p>Liste des Demandes</p>
                    </a>
                </li>
                <li>
                    <a href="/client">
                        <i class="now-ui-icons education_atom"></i>
                        <p>Liste des Clients</p>
                    </a>
                </li>
                <li>
                    <a href="/partenaire">
                        <i class="now-ui-icons transportation_air-baloon"></i>
                        <p>Liste des Partenaires</p>
                    </a>
                </li>
                <li>
                    <a href="/aliment">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>Liste des Aliments</p>
                    </a>
                </li>
                @if(auth()->user()->type == -1)
                <li>
                    <a href="/inscriptionA">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>Gestion des aministrateurs</p>
                    </a>
                </li>
                @endif
                <li>
                    <a class="btn btn-danger" href="/deconnexion">
                        Déconnexion
                    </a>
                </li>
                <li>
                    <a href="/menu">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>Menu</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="">
                        <p>Fallo Corp  MADE BY ASKOUR&HILALI</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-primary navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand">Page d'Administrateur</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/mon-compte">
                                <i @if( auth()->user()->type === -1 ) class="fas fa-user-cog" @else class="fas fa-user-cog" @endif></i>
                            </a>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        @yield('Content-fluid')
        <div class="content" style="padding-top: 80px">
            @yield('content')
            <br><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="card  card-tasks">
                        <div class="card-header ">
                            <h5 class="card-category">Backend development</h5>
                            <h4 class="card-title">Tasks</h4>
                        </div>
                        <div class="card-body ">
                            <div class="table-full-width table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" checked>
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-left">Sign contract for "What are conference organizers afraid of?"</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                                <i class="now-ui-icons ui-2_settings-90"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                                <i class="now-ui-icons ui-1_simple-remove"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox">
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-left">Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                                <i class="now-ui-icons ui-2_settings-90"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                                <i class="now-ui-icons ui-1_simple-remove"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" checked>
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-left">Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                                                <i class="now-ui-icons ui-2_settings-90"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                                                <i class="now-ui-icons ui-1_simple-remove"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-category">Information Personnel</h5>
                            <h4 class="card-title"> Salutation
                                    {{ auth()->user()->nom }}
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                Nom
                                            </th>
                                            <td>
                                                {{ auth()->user()->nom }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Tel
                                            </th>
                                            <td>
                                                {{ auth()->user()->tel }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Compte crée le
                                            </th>
                                            <td>
                                                {{ auth()->user()->created_at }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Type
                                            </th>
                                            <td>
                                                @if(auth()->user()->type === 0)
                                                    Administrateur
                                                @else
                                                    Super Administrateur
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com">
                                FALLO Corp
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Contacter l'administrateur
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy;
                    Développer par le ASKOUR Hamza et HILALI Ahmed
                </div>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>
</body>

</html>