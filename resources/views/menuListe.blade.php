@extends('Master')

@section('title')
    Menu
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Petit dejeuner
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        Kcal :
                        <br>
                        Protéines :
                        <br>
                        Glucides :
                        <br>
                        Lipides :
                        <br>
                        Fibres :
                        <br>
                        Minéraux :
                        <br>
                        Vitamines :

                    </div>
                    <div class="col-lg-6" style="text-align: center">
                        <img src="aliments/apricot.ico" width="75px" height="75px">
                        <img src="aliments/banana.ico" width="75px" height="75px">
                        <img src="aliments/tomato.ico" width="75px" height="75px">
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection