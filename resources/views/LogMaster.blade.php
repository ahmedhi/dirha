@extends('Master')

@section('cssCustom')
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="js/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles et Jquey-->
    <link rel="stylesheet" type="text/css" href="css/Login.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection

@section('content')

<!--Body -->
    <div class="d-flex justify-content-center" style="margin-bottom: 230px;">
        <div class="card">
            <div class="card-header">
                <center>
                    <img src="img/FalloSolo.png" style="width: 20%">
                    <!-- Specifier le type de la page -->
                    @yield('cardHeader')
                </center>
            </div>
            <div class="card-body">

                @yield('contentLog')

                <div class="card-footer">
                    <!-- SpecFooter est un footer specifique a la page -->
                    @yield('SpecFooter')
                    <br>
                    <div class="d-flex justify-content-center links">
                        Vous rencontrez un probleme ?
                    </div>
                    <div class="d-flex justify-content-center links">
                        <a href="/co" >Contactez Nous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
