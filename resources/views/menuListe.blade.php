@extends('Master')

@section('title')
    Menu
@endsection

@section('header-content')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
@endsection

@section('content')
    <div class="container">


        <!-- Petit Dejeuner -->
        <div class="card" style="text-align: center;">
        <div class="card-header text-center font-weight-bold">
            Petit Dejeuner
        </div>

        <div class="card-body">
            @if( !$Pt == null)
                <div class="row">
                    <div class="col-3" style="text-align: right">
                        Kcal :
                        <br>
                        Protéines :
                        <br>
                        Glucides :
                        <br>
                        Lipides :
                        <br>
                        Fibres :
                    </div>
                    <div class="col-3">
                        {{ $PtValue['Kcal'] }} <br>
                        {{ $PtValue['proteines'] }}<br>
                        {{ $PtValue['glucides'] }}<br>
                        {{ $PtValue['lipides'] }}<br>
                        {{ $PtValue['fibres'] }}<br>
                    </div>
                    <div class="col-6" style="text-align: center">
                        @foreach($Pt as $Al)
                            <img src="img/aliment/{{ $Al['nom'] }}.png" style="height: 50px ; width: 50px">
                            <br><br>
                        @endforeach
                    </div>
                </div>
            @endif

            <div>
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Pt">
                    @if( !$Pt == null)
                        Modifier le menu
                    @else
                        Ajouter un menu
                    @endif
                </button>

                <div class="modal fade" id="Pt">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header ">
                                <h2 class="modal-title" style="margin-left: auto; margin-right: auto">Modifier menu du Petit Dejeuner</h2>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <h4 style="align-content: center">Liste des aliments</h4>
                                            <div id="4">
                                                <form>
                                                    <select name="aliments" onclick="showAliment(this.value , 1 )">
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
                                            <div id="Pt">
                                                @if( !$Pt == null)
                                                    @foreach ($Pt as $aliment)
                                                        <img src="/img/aliment/{{ $aliment['nom'] }}.png " style="height: 50px ; width: 50px">
                                                    @endforeach

                                                @else
                                                    PAS D'ALIMENTS

                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div id="PetitD"></div>

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


        <br><br>

        <!-- Dejeuner -->
        <div class="card" style="text-align: center;">
            <div class="card-header text-center font-weight-bold">
                Dejeuner
            </div>

            <div class="card-body">
                @if( !$Dej == null)
                    <div class="row">
                        <div class="col-3" style="text-align: right">
                            Kcal :
                            <br>
                            Protéines :
                            <br>
                            Glucides :
                            <br>
                            Lipides :
                            <br>
                            Fibres :
                        </div>
                        <div class="col-3">
                            {{ $DejValue['Kcal'] }} <br>
                            {{ $DejValue['proteines'] }}<br>
                            {{ $DejValue['glucides'] }}<br>
                            {{ $DejValue['lipides'] }}<br>
                            {{ $DejValue['fibres'] }}<br>
                        </div>
                <div class="col-6" style="text-align: center">
                    @foreach($Dej as $Al)
                        <img src="img/aliment/{{ $Al['nom'] }}.png" style="height: 50px ; width: 50px">
                        <br><br>
                    @endforeach
                </div>
                    </div>
                @endif

                <div>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Dej">
                        @if( !$Dej == null)
                            Modifier le menu
                        @else
                            Ajouter un menu
                        @endif
                    </button>

                    <div class="modal fade" id="Dej">
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
                                                        <select name="aliments" onclick="showAliment(this.value , 2 )">
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
                                                    @if( !$Dej == null)
                                                        @foreach ($Dej as $aliment)
                                                            <img src="/img/aliment/{{ $aliment['nom'] }}.png " style="height: 50px ; width: 50px">
                                                        @endforeach

                                                    @else
                                                        PAS D'ALIMENTS

                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>

                                        <div id="Dejeuner"></div>

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

        <br><br>

        <!-- Collation -->
        <div class="card" style="text-align: center;">
            <div class="card-header text-center font-weight-bold">
                Collation
            </div>

            <div class="card-body">
                @if( !$Col == null)
                    <div class="row">
                        <div class="col-3" style="text-align: right">
                            Kcal :
                            <br>
                            Protéines :
                            <br>
                            Glucides :
                            <br>
                            Lipides :
                            <br>
                            Fibres :
                        </div>
                        <div class="col-3">
                            {{ $ColValue['Kcal'] }} <br>
                            {{ $ColValue['proteines'] }}<br>
                            {{ $ColValue['glucides'] }}<br>
                            {{ $ColValue['lipides'] }}<br>
                            {{ $ColValue['fibres'] }}<br>
                        </div>
                        <div class="col-6" style="text-align: center">
                            @foreach($Col as $Al)
                                <img src="img/aliment/{{ $Al['nom'] }}.png" style="height: 50px ; width: 50px">
                                <br><br>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Col">
                        @if( !$Col == null)
                            Modifier le menu
                        @else
                            Ajouter un menu
                        @endif
                    </button>

                    <div class="modal fade" id="Col">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header ">
                                    <h2 class="modal-title" style="margin-left: auto; margin-right: auto">Modifier menu de la Collation</h2>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <h4 style="align-content: center">Liste des aliments</h4>
                                                <div id="4">
                                                    <form>
                                                        <select name="aliments" onclick="showAliment(this.value , 2 )">
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
                                                    @if( !$Col == null)
                                                        @foreach ($Col as $aliment)
                                                            <img src="/img/aliment/{{ $aliment['nom'] }}.png " style="height: 50px ; width: 50px">
                                                        @endforeach

                                                    @else
                                                        PAS D'ALIMENTS

                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>

                                        <div id="Collation"></div>

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

        <br><br>

        <!-- Diner -->
        <div class="card" style="text-align: center;">
            <div class="card-header text-center font-weight-bold">
                Diner
            </div>

            <div class="card-body">
                @if( !$Din == null)
                    <div class="row">
                        <div class="col-3" style="text-align: right">
                            Kcal :
                            <br>
                            Protéines :
                            <br>
                            Glucides :
                            <br>
                            Lipides :
                            <br>
                            Fibres :
                        </div>
                        <div class="col-3">
                            {{ $DinValue['Kcal'] }} <br>
                            {{ $DinValue['proteines'] }}<br>
                            {{ $DinValue['glucides'] }}<br>
                            {{ $DinValue['lipides'] }}<br>
                            {{ $DinValue['fibres'] }}<br>
                        </div>
                        <div class="col-6" style="text-align: center">
                            @foreach($Din as $Al)
                                <img src="img/aliment/{{ $Al['nom'] }}.png" style="height: 50px ; width: 50px">
                                <br><br>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Din">
                        @if( !$Din == null)
                            Modifier le menu
                        @else
                            Ajouter un menu
                        @endif
                    </button>

                    <div class="modal fade" id="Din">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header ">
                                    <h2 class="modal-title" style="margin-left: auto; margin-right: auto">Modifier menu du Diner</h2>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <h4 style="align-content: center">Liste des aliments</h4>
                                                <div id="4">
                                                    <form>
                                                        <select name="aliments" onclick="showAliment(this.value , 2 )">
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
                                                    @if( !$Din == null)
                                                        @foreach ($Din as $aliment)
                                                            <img src="/img/aliment/{{ $aliment['nom'] }}.png " style="height: 50px ; width: 50px">
                                                        @endforeach

                                                    @else
                                                        PAS D'ALIMENTS

                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>

                                        <div id="Diner"></div>

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