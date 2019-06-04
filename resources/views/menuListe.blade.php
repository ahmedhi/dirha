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
                            {{ $PtValue['Kcal'] }}
                            <br>
                            {{ $PtValue['proteines'] }} g
                            <br>
                            {{ $PtValue['glucides'] }} g
                            <br>
                            {{ $PtValue['lipides'] }} g
                            <br>
                            {{ $PtValue['fibres'] }} g
                        </div>
                <div class="col-6" style="text-align: center">
                    <?php $Count = 0 ?>
                    @foreach($Pt as $Al)
                        <img src="img/aliment/{{ $Al['nom'] }}.png" style="height: 50px ; width: 50px">
                        <?php
                        $Count++;
                        if ($Count == 2){
                        ?>
                        @break
                        <?php
                        }
                        ?>
                        <br>
                    @endforeach
                </div>
                    </div>
                @endif

                <div>
                    <!-- Button to Open the Modal -->
                    <br>
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#Pt">
                        @if( !$Pt == null)
                            <i class="fas fa-plus"> Modifier le menu </i>
                        @else
                            <i class="fas fa-plus"> Ajouter un menu </i>
                        @endif
                    </button>

                    <div class="modal fade" id="Pt">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header ">
                                    <h2 class="modal-title" style="margin-left: auto; margin-right: auto">Modifier menu Petit Dejeuner</h2>
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
                                                <div id="menu">
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
            <br>
        </div>


        <br><br>

        <!-- Dejeuner -->
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
                            {{ $PtValue['Kcal'] }}
                            <br>
                            {{ $PtValue['proteines'] }} g
                            <br>
                            {{ $PtValue['glucides'] }} g
                            <br>
                            {{ $PtValue['lipides'] }} g
                            <br>
                            {{ $PtValue['fibres'] }} g
                        </div>
                        <div class="col-6" style="text-align: center">
                            <?php $Count = 0 ?>
                            @foreach($Pt as $Al)
                                <img src="img/aliment/{{ $Al['nom'] }}.png" style="height: 50px ; width: 50px">
                                <?php
                                $Count++;
                                if ($Count == 2){
                                ?>
                                @break
                                <?php
                                }
                                ?>
                                <br>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div>
                    <!-- Button to Open the Modal -->
                    <br>
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#Dej">
                        @if( !$Pt == null)
                            <i class="fas fa-plus"> Modifier le menu </i>
                        @else
                            <i class="fas fa-plus"> Ajouter un menu </i>
                        @endif
                    </button>

                    <div class="modal fade" id="Dej">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header ">
                                    <h2 class="modal-title" style="margin-left: auto; margin-right: auto">Modifier menu Petit Dejeuner</h2>
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
                                                <div id="menu">
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
            <br>
        </div>


        <br><br>
        <br><br>
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