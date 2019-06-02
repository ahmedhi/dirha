@extends('adminMaster')

@section('refsheet')
    <link type="text/css" href="css/aliment.css" rel="stylesheet">
@endsection

@section('content')
    <center>
        <div class="card" style="width: 50%; border-radius: 26px; background-color: #ececec">
            <div class="card-header">
                <div style="text-align: center;"><h3 style="color: #ff3636">Ajouter un Aliment</h3></div>
            </div>
            <div class="card-body">
                <form method="post" class="section" enctype="multipart/form-data">

                {{csrf_field()}}

                <div class="row">
                <!-- Nom de l'aliment -->
                    <div class="col input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="text" class="form-control" name="nom" placeholder="Nom de l'aliment" value="{{ old('nom') }}">
                    </div>

                <!-- icone -->
                    <div class="col input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-images"></i></span>
                        </div>
                        <input type="file" class="form-control" id ="icone" name="icone" placeholder="icone" value="{{ old('icone') }}" style="padding-bottom: 0.400px;border-bottom-width: 0px;padding-top: 0.5px;">
                    </div>

                </div>
                    <div class="row">

                        <!-- Gestion d'erreur pour le nom -->
                            <p class="col-lg-6 erreur">
                                @if( $errors->has('nom'))
                                {{ $errors->first('nom') }}
                                @endif
                            </p>

                        <!-- Gestion d'erreur pour le image -->
                            <p class="col-lg-6 erreur">
                                @if( $errors->has('icone'))
                                {{ $errors->first('icone') }}
                                @endif
                            </p>

                    </div>

                    <br>

                    <div class="row">
                <!-- Energie Kcal -->
                    <div class="col input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><img src="https://img.icons8.com/metro/25/000000/caloric-energy.png"></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Energie Kcal" name="energie Kcal" value="{{ old('energie_Kcal') }}"> <div class="ref"> (kcal) </div>

                    </div>

                <!-- Proteines-->
                    <div class="col input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                width="25" height="25"
                                                                viewBox="0 0 192 192"
                                                                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-size="none" style="mix-blend-mode: normal"><path d="M0,192v-192h192v192z" fill="none"></path><g fill="#000000"><path d="M49.92,11.52c-21.16352,0 -38.4,17.23648 -38.4,38.4v92.16c0,21.16352 17.23648,38.4 38.4,38.4h92.16c21.16352,0 38.4,-17.23648 38.4,-38.4v-92.16c0,-21.16352 -17.23648,-38.4 -38.4,-38.4zM49.92,19.2h92.16c17.01376,0 30.72,13.70624 30.72,30.72v92.16c0,17.01376 -13.70624,30.72 -30.72,30.72h-92.16c-17.01376,0 -30.72,-13.70624 -30.72,-30.72v-92.16c0,-17.01376 13.70624,-30.72 30.72,-30.72zM120.9,30.54c-5.05042,0.02517 -9.70097,1.83607 -12.8475,5.2275c-0.06451,0.05787 -0.12705,0.1179 -0.1875,0.18c-0.02964,0.03311 -0.06065,0.06409 -0.09,0.0975l-14.2575,15.135c-2.82136,2.99498 -3.74369,7.16058 -3.4125,11.3775c0.3312,4.21692 1.87819,8.68045 4.4625,13.0725c0.00117,0.00205 0.61858,1.06146 0.69,1.185c-3.70743,-1.92777 -7.81875,-3.56298 -12.165,-4.0575c-4.61973,-0.52564 -9.66646,0.42046 -13.725,3.825c-0.06394,0.04557 -0.12647,0.0931 -0.1875,0.1425c-0.00694,0.00599 -0.01556,0.00899 -0.0225,0.015c-0.04602,0.04141 -0.09104,0.08392 -0.135,0.1275c-0.03302,0.02944 -0.06552,0.05944 -0.0975,0.09c-0.03583,0.03927 -0.07083,0.07928 -0.105,0.12c-0.01259,0.01241 -0.02509,0.02491 -0.0375,0.0375l-11.55,13.185c-2.82136,2.99498 -3.73619,7.16058 -3.405,11.3775c0.3312,4.21692 1.87069,8.68045 4.455,13.0725c0.02311,0.0433 1.60378,2.96383 2.385,4.4175l-8.4975,-6.48c-0.71955,-0.5477 -1.60929,-0.82391 -2.5125,-0.78c-1.12531,0.05428 -2.17003,0.59994 -2.8575,1.4925l-15.285,19.875c-0.62766,0.81884 -0.89945,1.8558 -0.75413,2.87724c0.14532,1.02144 0.69551,1.94146 1.52663,2.55276c0,0 20.32642,14.94855 23.37,17.2125c0.00499,0.00501 0.00999,0.01001 0.015,0.015c9.06697,6.66285 20.32416,7.3141 26.82,0.9c0.16388,-0.12981 0.31689,-0.27278 0.4575,-0.4275l13.5675,-15.0525v-0.0075c2.81772,-2.99462 3.736,-7.1554 3.405,-11.37c-0.3312,-4.21692 -1.87069,-8.68044 -4.455,-13.0725l0.075,0.12c0,0 -1.10878,-2.03606 -1.4025,-2.58c0.34794,0.18995 0.64247,0.39195 0.9975,0.5775c3.944,2.0613 8.33374,3.86417 12.87,4.47c4.38394,0.58548 9.16505,-0.11731 12.915,-3.225c0.13907,-0.09371 0.27186,-0.19643 0.3975,-0.3075c0.0025,-0.0025 0.005,-0.005 0.0075,-0.0075c0.20085,-0.16595 0.3843,-0.35191 0.5475,-0.555l12.4725,-13.245c2.82136,-2.99498 3.74369,-7.16058 3.4125,-11.3775c-0.33078,-4.21184 -1.86881,-8.67056 -4.4475,-13.0575l-0.0075,-0.0075c-0.00154,-0.00268 -2.31289,-3.96883 -3.0975,-5.3175l9.6975,7.05c1.6829,1.2235 4.03406,0.8843 5.3025,-0.765l15.2775,-19.875c0.63007,-0.81931 0.9033,-1.85801 0.75792,-2.8813c-0.14538,-1.02329 -0.69709,-1.94479 -1.53042,-2.5562c0,0 -20.00818,-14.7018 -23.235,-17.1c-4.78154,-3.90537 -10.38367,-5.74838 -15.5775,-5.7225zM121.005,38.58c3.38355,-0.05886 7.29145,0.91137 10.62,3.63c0.04421,0.036 0.08923,0.071 0.135,0.105c2.76191,2.05443 16.11824,11.87211 20.25,14.91l-10.6125,13.8l-20.7675,-15.0975c-0.73179,-1.25634 -1.40769,-2.41495 -1.95,-3.345l-0.0075,-0.015c-2.23807,-3.96846 -3.39447,-9.55389 -3.885,-12.4425c1.47681,-0.88345 3.69796,-1.50117 6.2175,-1.545zM108.4275,46.5525c0.7778,3.08673 1.72327,6.54271 3.57,9.81c0.0074,0.01505 0.0149,0.03005 0.0225,0.045c0.57235,0.98155 1.28463,2.20684 2.07,3.555c0.13718,0.33685 0.32153,0.6525 0.5475,0.9375c4.80104,8.24257 12.0375,20.6775 12.0375,20.6775c0.00249,0.00501 0.00499,0.01 0.0075,0.015c2.09281,3.55675 3.20494,7.04172 3.42,9.78c0.21504,2.73828 -0.41986,4.53308 -1.3425,5.5125l-8.79,9.33c-1.09327,-3.1004 -1.56621,-5.32409 -4.14,-9.6525c-0.01466,-0.02768 -0.02966,-0.05518 -0.045,-0.0825c-3.58918,-5.72279 -14.5875,-24.72 -14.5875,-24.72c-0.00497,-0.00752 -0.00998,-0.01502 -0.015,-0.0225c-2.09281,-3.55675 -3.20494,-7.04172 -3.42,-9.78c-0.21504,-2.73828 0.42736,-4.53309 1.35,-5.5125zM79.9425,80.295c0.72251,-0.02827 1.47996,0.00647 2.28,0.0975c3.20017,0.36411 6.88605,1.79634 10.2825,3.6375c6.56476,3.55865 11.67194,8.23493 12.0225,8.5575c1.68711,2.84487 3.65452,6.22418 4.7025,7.8975c2.39021,4.01967 3.96063,8.27894 4.89,10.9725c-1.41714,0.55176 -3.05472,0.69315 -5.1,0.42c-3.12994,-0.41801 -6.85424,-1.85616 -10.32,-3.6675c-6.86126,-3.58598 -12.51462,-8.35501 -12.63,-8.4525c-1.59715,-2.88203 -3.40084,-6.20435 -4.5,-8.0925c-2.38274,-4.21561 -4.03821,-7.97177 -5.115,-10.5375c1.08544,-0.4919 2.2273,-0.78318 3.4875,-0.8325zM70.71,86.58c1.19126,2.80696 1.75284,4.58848 4.17,8.865c0.00989,0.01507 0.01989,0.03007 0.03,0.045c3.94056,6.76431 13.8675,25.1775 13.8675,25.1775c0.02418,0.04298 0.04918,0.08549 0.075,0.1275c2.09281,3.55675 3.20494,7.04172 3.42,9.78c0.21504,2.73828 -0.42736,4.53308 -1.35,5.5125c-0.01771,0.01982 -0.03521,0.03982 -0.0525,0.06l-8.4825,9.405c-0.77864,-3.22968 -1.74026,-6.8407 -3.72,-9.99c-3.45672,-5.51159 -13.695,-24.57 -13.695,-24.57c-0.02409,-0.0455 -0.0491,-0.09051 -0.075,-0.135c-2.09281,-3.55675 -3.20494,-7.04172 -3.42,-9.78c-0.21504,-2.73828 0.42736,-4.53309 1.35,-5.5125c0.03063,-0.03446 0.06063,-0.06946 0.09,-0.105zM50.5575,121.1175l19.095,14.5725c0.10132,0.07768 0.20645,0.15027 0.315,0.2175c0.76101,1.3094 1.61895,2.83198 2.19,3.7425c0.0025,0 0.005,0 0.0075,0c2.35585,3.74761 3.40055,10.17442 3.765,12.63c-3.44172,2.07427 -9.64284,1.91977 -15.705,-2.535c-2.77566,-2.06448 -16.09071,-11.85341 -20.2275,-14.895z"></path></g></g></svg></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Proteines" name="proteines" value="{{ old('proteines') }}"> <div class="ref"> (g) </div>

                    </div>

                    </div>

                    <div class="row">
                        <!-- Gestion d'erreur pour les Energie Kcal -->
                            <p class="col-lg-6 erreur">
                                @if( $errors->has('energie_Kcal'))
                                {{ $errors->first('energie_Kcal') }}
                                @endif
                            </p>

                        <!-- Gestion d'erreur pour les proteines -->
                        <p class="col-lg-6 erreur">
                                @if( $errors->has('proteines'))
                                {{ $errors->first('proteines') }}
                                @endif
                            </p>

                    </div>

                    <div class="row">
                <!-- Glucides-->
                    <div class="col input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><img src="https://img.icons8.com/metro/25/000000/carbohydrates.png"></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Glucides" name="glucides" value="{{ old('glucides') }}"> <div class="ref"> (g) </div>

                    </div>

                <!-- Lipides -->
                    <div class="col input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><img src="https://img.icons8.com/metro/25/000000/lipids.png"></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Lipides" name="lipides" value="{{ old('lipides') }}"> <div class="ref"> (g) </div>

                    </div>
                    </div>

                    <div class="row">
                        <!-- Gestion d'erreur pour les glucides -->
                            <p class="col-lg-6 erreur">
                                @if( $errors->has('glucides'))
                                {{ $errors->first('glucides') }}
                                @endif
                            </p>

                        <!-- Gestion d'erreur pour les lipides -->
                            <p class="col-lg-6 erreur">
                                @if( $errors->has('lipides'))
                                {{ $errors->first('lipides') }}
                                @endif
                            </p>

                    </div>

                    <div class="row">
                        <!-- Fibres -->
                        <div class="col input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><img src="https://img.icons8.com/metro/25/000000/fiber.png"></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Fibre" name="fibres" value="{{ old('fibres') }}"> <div class="ref"> (g) </div>

                        </div>

                    <!-- Mineraux -->
                        <!-- Quantite -->
                        <div class="col input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><img src="https://img.icons8.com/material/25/000000/estimates.png"></span>
                            </div>
                            <input type="number" min="0" class="form-control" placeholder="Quantite" name="quantite" value="100"> <div class="ref"> (g) </div>

                        </div>

                    </div>

                    <div class="row">
                        <!-- Gestion d'erreur pour les fibres -->
                            <p class="col-lg-6 erreur">
                                @if( $errors->has('fibres'))
                                {{ $errors->first('fibres') }}
                                @endif
                            </p>

                        <!-- Gestion d'erreur pour la quantite -->
                            <p class="col-lg-6 erreur">
                                @if( $errors->has('quantite'))
                                    {{ $errors->first('quantite') }}
                                @endif
                            </p>

                    </div>



                <!-- Boutton de confirmation -->
                    <div style="text-align: center;">
                        <div class="form-group">
                            <button type="submit" class="btn" style="color: red; background-color: white; font-size: medium">Ajouter</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <br><br>
    </center>

    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
            <tr style=" text-align: center ;" >
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Energie Kcal</th>
                <th scope="col">Proteine</th>
                <th scope="col">Glucides</th>
                <th scope="col">Lipides</th>
                <th scope="col">Fibres</th>
                <th scope="col">Quantite</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $aliments as $aliment)
                <tr>
                    <th scope="col"><img src="/img/aliment/{{ $aliment->nom }}.png" style="height: 30px ; width: 50px"></th>
                    <th scope="col">{{ $aliment->nom }}</th>
                    <th scope="col">{{ $aliment->energie_Kcal }}</th>
                    <th scope="col">{{ $aliment->proteines }}</th>
                    <th scope="col">{{ $aliment->glucides }}</th>
                    <th scope="col">{{ $aliment->lipides }}</th>
                    <th scope="col">{{ $aliment->fibres }}</th>
                    <th scope="col">{{ $aliment->quantite }}</th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
