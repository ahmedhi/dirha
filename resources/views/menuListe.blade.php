@extends('Master')

@section('title')
    Menu
@endsection

@section('header-content')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="card" style="text-align: center;">
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

                <br>

            </div>

        </div>

        <br><br>

        <div class="card" style="text-align: center;">
            <div class="card-header text-center font-weight-bold">
                Dejeuner
            </div>

            <div class="card-body">
                <div>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#myModal">
                        <i class="fas fa-plus"> Ajouter un menu </i>
                    </button>

                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header ">
                                    <h2 class="modal-title" style="margin-left: auto; margin-right: auto">Modifier menu du Dejeuner</h2>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <h4 style="align-content: center">Liste des aliments</h4>
                                                <img src="aliments/apricot.ico" width="75px" height="75px">
                                                <img src="aliments/banana.ico" width="75px" height="75px">
                                                <img src="aliments/tomato.ico" width="75px" height="75px">
                                                <br>
                                                <img src="aliments/apricot.ico" width="75px" height="75px">
                                                <img src="aliments/banana.ico" width="75px" height="75px">
                                                <img src="aliments/tomato.ico" width="75px" height="75px">
                                            </div>
                                            <div class="col">
                                                <h4 style="align-content: center">Aliments du menu</h4>
                                                <img src="aliments/banana.ico" width="75px" height="75px">
                                                <img src="aliments/tomato.ico" width="75px" height="75px">
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row" style="align-content: center">
                                            <div class="col-2">
                                                <img src="aliments/tomato.ico" width="75px" height="75px">
                                            </div>
                                            <div class="col-10">
                                                <table class="table-borderless" style="width: 100%">
                                                    <tr>
                                                        <th>
                                                            Kcal
                                                        </th>
                                                        <th>
                                                            Protéines
                                                        </th>
                                                        <th>
                                                            Glucides
                                                        </th>
                                                        <th>
                                                            Glucides
                                                        </th>
                                                        <th>
                                                            Minéraux
                                                        </th>
                                                        <th>
                                                            Fibres
                                                        </th>
                                                        <th>
                                                            Kcal
                                                        </th>
                                                        <th>
                                                            Vitamines
                                                        </th>
                                                    </tr>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>


        </div>
    </div>
    </div>

@endsection