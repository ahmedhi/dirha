@extends('Master')

@section('title')
    Menu
@endsection

@section('header-content')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="card" style="text-align: center;">
            <div class="card-header text-center font-weight-bold">
                Petit dejeuner
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-6">
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
                    <div class="col-6" style="text-align: center">
                        @foreach($randAl as $Al)
                            <img src="img/aliment/{{ $Al->nom }}.png" style="height: 50px ; width: 50px">
                            <br><br>
                        @endforeach
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
                                            <div class="col-lg-5">
                                                <h4 style="align-content: center">Liste des aliments</h4>
                                                <div id="4">
                                                    <form>
                                                        <select name="aliments" onclick="showAliment(this.value)">
                                                            @foreach($aliments as $aliment)
                                                                <option value="{{ $aliment->aliment_id }}" >{{ $aliment->nom }}</option>
                                                            @endforeach
                                                        </select>
                                                    </form>

                                                </div>
                                            </div>
                                            <div class="col-1"></div>
                                            <div class="col-lg-5">
                                                <h4 style="align-content: center">Aliments du menu</h4>
                                                <div id="menu">
                                                @foreach($randAl as $Al)
                                                    <img src="img/aliment/{{ $Al->nom }}.png" height="75px" width="75px">
                                                @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>

                                        <div id="txtHint"></div>

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

@section('footer')
    <script>
        $(document).ready(function(){
            $("#Value").hide();


            $("#4").click(function(){
                //$("#Value").show();
                $("#Value").load("/menu/ #Value");
            });
        });

    </script>
@endsection