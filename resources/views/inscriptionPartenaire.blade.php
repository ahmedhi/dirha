@extends('LogMaster')

@section('title')
    Inscription
@endsection

@section('cardHeader')
    <h3>Inscrivez vous</h3>
@endsection

@section('content')
    <form method="post" class="section " enctype="multipart/form-data">

        {{csrf_field()}}


        <!-- Email -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="text" class="form-control" name="email" placeholder="Adresse Mail" value="{{ old('email') }}">
        </div>

        <!-- Gestion d'erreur pour l'adresse Mail -->
        @if( $errors->has('email'))

            <p class="erreur">
                {{ $errors->first('email') }}
            </p>

        @endif

    <!-- Mot de passe -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="Mot de passe" name="password">

        </div>
        <!-- Gestion d'erreur pour le mot de passe -->
        @if( $errors->has('password'))
            <p class="erreur">
                {{ $errors->first('password') }}
            </p>

        @endif

    <!-- Mot de passe de confirmation-->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="Mot de passe de confirmation" name="password_confirmation">
        </div>

        <!-- Gestion d'erreur pour le mot de passe de confirmation-->
        @if( $errors->has('password_confirmation'))

            <p class="erreur">
                {{ $errors->first('password_confirmation') }}
            </p>

        @endif

        <br>

        <!-- Sexe -->

        <!-- Nom Complet-->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" name="nom_complet" placeholder="Nom Complet" value="{{ old('nom_complet') }}">
        </div>

        <!-- Gestion d'erreur pour le Nom -->
        @if( $errors->has('nom_complet'))
            <p class="erreur">
                {{ $errors->first('nom_complet') }}
            </p>

        @endif

    <!-- Photo de profil -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-images"></i></span>
            </div>
            <input type="file" class="form-control" id ="image" name="image" placeholder="Photo de profil" style="padding-bottom: 0.400px;border-bottom-width: 0px;padding-top: 0.5px;">
        </div>

        <!-- Gestion d'erreur pour le image -->
        @if( $errors->has('image'))
            <p class="erreur">
                {{ $errors->first('image') }}
            </p>

        @endif

    <!-- Numero de téléphone -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-mobile"></i></span>
            </div>
            <input  type="tel"
                    class="form-control" name="num"
                    placeholder="Numero de Téléphone"
                    value="{{ old('num') }}"
                    pattern="0[0-9]{9}"
            >
        </div>

        <!-- Gestion d'erreur pour le num -->
        @if( $errors->has('num'))
            <p class="erreur">
                {{ $errors->first('num') }}
            </p>

        @endif

    <!-- Numero de téléphone Fix -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-tty "></i></span>
            </div>
            <input  type="tel"
                    class="form-control" name="fix"
                    placeholder="Numero de Téléphone Fix"
                    value="{{ old('fix') }}"
                    pattern="0[0-9]{9}"
            >
        </div>

        <!-- Gestion d'erreur pour le num -->
        @if( $errors->has('fix'))
            <p class="erreur">
                {{ $errors->first('fix') }}
            </p>

        @endif

    <!-- Date de naissance -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar-alt "></i></span>
            </div>
            <input type="date" class="form-control" name="date" placeholder="Date de naissance" value="{{ old('date') }}">
        </div>

        <!-- Gestion d'erreur pour le date -->
        @if( $errors->has('date'))
            <p class="erreur">
                {{ $errors->first('date') }}
            </p>

        @endif

    <!-- Pays -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-globe-africa  "></i></span>
            </div>
            <select name="pays" class="form-control">
                <option value="Maroc" selected="selected">Maroc </option>

                <option value="Afghanistan">Afghanistan </option>
                <option value="Afrique_Centrale">Afrique Centrale </option>
                <option value="Afrique_du_Sud">Afrique du Sud </option>
                <option value="Albanie">Albanie </option>
                <option value="Algerie">Algérie </option>
                <option value="Allemagne">Allemagne </option>
                <option value="Andorre">Andorre </option>
                <option value="Angola">Angola </option>
                <option value="Anguilla">Anguilla </option>
                <option value="Arabie_Saoudite">Arabie Saoudite </option>
                <option value="Argentine">Argentine </option>
                <option value="Armenie">Armenie </option>
                <option value="Australie">Australie </option>
                <option value="Autriche">Autriche </option>
                <option value="Azerbaidjan">Azerbaidjan </option>

                <option value="Bahamas">Bahamas </option>
                <option value="Bangladesh">Bangladesh </option>
                <option value="Barbade">Barbade </option>
                <option value="Bahrein">Bahrein </option>
                <option value="Belgique">Belgique </option>
                <option value="Belize">Belize </option>
                <option value="Benin">Bénin </option>
                <option value="Bermudes">Bermudes </option>
                <option value="Bielorussie">Bielorussie </option>
                <option value="Bolivie">Bolivie </option>
                <option value="Botswana">Botswana </option>
                <option value="Bhoutan">Bhoutan </option>
                <option value="Boznie_Herzegovine">Boznie Herzégovine </option>
                <option value="Bresil">Brésil </option>
                <option value="Brunei">Brunei </option>
                <option value="Bulgarie">Bulgarie </option>
                <option value="Burkina_Faso">Burkina Faso </option>
                <option value="Burundi">Burundi </option>

                <option value="Caiman">Caiman </option>
                <option value="Cambodge">Cambodge </option>
                <option value="Cameroun">Cameroun </option>
                <option value="Canada">Canada </option>
                <option value="Canaries">Canaries </option>
                <option value="Cap_vert">Cap Vert </option>
                <option value="Chili">Chili </option>
                <option value="Chine">Chine </option>
                <option value="Chypre">Chypre </option>
                <option value="Colombie">Colombie </option>
                <option value="Comores">Colombie </option>
                <option value="Congo">Congo </option>
                <option value="Congo_democratique">Congo Démocratique </option>
                <option value="Cook">Cook </option>
                <option value="Coree_du_Nord">Corée du Nord </option>
                <option value="Coree_du_Sud">Corée du Sud </option>
                <option value="Costa_Rica">Costa Rica </option>
                <option value="Cote_d_Ivoire">Côte d’Ivoire </option>
                <option value="Croatie">Croatie </option>
                <option value="Cuba">Cuba </option>

                <option value="Danemark">Danemark </option>
                <option value="Djibouti">Djibouti </option>
                <option value="Dominique">Dominique </option>

                <option value="Egypte">Egypte </option>
                <option value="Emirats_Arabes_Unis">Emirats Arabes Unis </option>
                <option value="Equateur">Equateur </option>
                <option value="Erythree">Erythrée </option>
                <option value="Espagne">Espagne </option>
                <option value="Estonie">Estonie </option>
                <option value="Etats_Unis">Etats-Unis </option>
                <option value="Ethiopie">Ethiopie </option>

                <option value="Falkland">Falkland </option>
                <option value="Feroe">Feroe </option>
                <option value="Fidji">Fidji </option>
                <option value="Finlande">Finlande </option>
                <option value="France">France </option>

                <option value="Gabon">Gabon </option>
                <option value="Gambie">Gambie </option>
                <option value="Georgie">Géorgie </option>
                <option value="Ghana">Ghana </option>
                <option value="Gibraltar">Gibraltar </option>
                <option value="Grece">Grece </option>
                <option value="Grenade">Grenade </option>
                <option value="Groenland">Groënland </option>
                <option value="Guadeloupe">Guadeloupe </option>
                <option value="Guam">Guam </option>
                <option value="Guatemala">Guatémala</option>
                <option value="Guernesey">Guernesey </option>
                <option value="Guinee">Guinée </option>
                <option value="Guinee_Bissau">Guinée Bissau </option>
                <option value="Guinee equatoriale">Guinée Equatoriale </option>
                <option value="Guyana">Guyana </option>
                <option value="Guyane_Francaise ">Guyane Francaise </option>

                <option value="Haiti">Haiti </option>
                <option value="Hawaii">Hawaii </option>
                <option value="Honduras">Honduras </option>
                <option value="Hong_Kong">Hong Kong </option>
                <option value="Hongrie">Hongrie </option>

                <option value="Inde">Inde </option>
                <option value="Indonesie">Indonésie </option>
                <option value="Iran">Iran </option>
                <option value="Iraq">Iraq </option>
                <option value="Irlande">Irlande </option>
                <option value="Islande">Islande </option>
                <option value="Israel">Israel </option>
                <option value="Italie">italie </option>

                <option value="Jamaique">Jamaïque </option>
                <option value="Jan Mayen">Jan Mayen </option>
                <option value="Japon">Japon </option>
                <option value="Jersey">Jersey </option>
                <option value="Jordanie">Jordanie </option>

                <option value="Kazakhstan">Kazakhstan </option>
                <option value="Kenya">Kenya </option>
                <option value="Kirghizstan">Kirghizistan </option>
                <option value="Kiribati">Kiribati </option>
                <option value="Koweit">Koweït </option>

                <option value="Laos">Laos </option>
                <option value="Lesotho">Lesotho </option>
                <option value="Lettonie">Lettonie </option>
                <option value="Liban">Liban </option>
                <option value="Liberia">Liberia </option>
                <option value="Liechtenstein">Liechtenstein </option>
                <option value="Lituanie">Lituanie </option>
                <option value="Luxembourg">Luxembourg </option>
                <option value="Lybie">Lybie </option>

                <option value="Macao">Macao </option>
                <option value="Macedoine">Macédoine </option>
                <option value="Madagascar">Madagascar </option>
                <option value="Madère">Madère </option>
                <option value="Malaisie">Malaisie </option>
                <option value="Malawi">Malawi </option>
                <option value="Maldives">Maldives </option>
                <option value="Mali">Mali </option>
                <option value="Malte">Malte </option>
                <option value="Man">Man </option>
                <option value="Mariannes du Nord">Mariannes du Nord </option>
                <option value="Maroc">Maroc </option>
                <option value="Marshall">Marshall </option>
                <option value="Martinique">Martinique </option>
                <option value="Maurice">Maurice </option>
                <option value="Mauritanie">Mauritanie </option>
                <option value="Mayotte">Mayotte </option>
                <option value="Mexique">Mexique </option>
                <option value="Micronesie">Micronesie </option>
                <option value="Midway">Midway </option>
                <option value="Moldavie">Moldavie </option>
                <option value="Monaco">Monaco </option>
                <option value="Mongolie">Mongolie </option>
                <option value="Montserrat">Montserrat </option>
                <option value="Mozambique">Mozambique </option>

                <option value="Namibie">Namibie </option>
                <option value="Nauru">Nauru </option>
                <option value="Nepal">Nepal </option>
                <option value="Nicaragua">Nicaragua </option>
                <option value="Niger">Niger </option>
                <option value="Nigeria">Nigéria </option>
                <option value="Niue">Niue </option>
                <option value="Norfolk">Norfolk </option>
                <option value="Norvege">Norvège </option>
                <option value="Nouvelle_Caledonie">Nouvelle Calédonie </option>
                <option value="Nouvelle_Zelande">Nouvelle Zélande </option>

                <option value="Oman">Oman </option>
                <option value="Ouganda">Ouganda </option>
                <option value="Ouzbekistan">Ouzbékistan </option>

                <option value="Pakistan">Pakistan </option>
                <option value="Palau">Palau </option>
                <option value="Palestine">Palestine </option>
                <option value="Panama">Panama </option>
                <option value="Papouasie_Nouvelle_Guinee">Papouasie Nouvelle Guinée</option>
                <option value="Paraguay">Paraguay </option>
                <option value="Pays_Bas">Pays Bas </option>
                <option value="Perou">Perou </option>
                <option value="Philippines">Philippines </option>
                <option value="Pologne">Pologne </option>
                <option value="Polynesie">Polynesie </option>
                <option value="Porto_Rico">Porto Rico </option>
                <option value="Portugal">Portugal </option>

                <option value="Qatar">Qatar </option>

                <option value="Republique_Dominicaine">Republique Dominicaine </option>
                <option value="Republique_Tcheque">Republique Tcheque </option>
                <option value="Reunion">Reunion </option>
                <option value="Roumanie">Roumanie </option>
                <option value="Royaume_Uni">Royaume Uni </option>
                <option value="Russie">Russie </option>
                <option value="Rwanda">Rwanda </option>

                <option value="Sahara Occidental">Sahara Occidental </option>
                <option value="Sainte_Lucie">Sainte-Lucie </option>
                <option value="Saint_Marin">Saint-Marin </option>
                <option value="Salomon">Salomon </option>
                <option value="Salvador">Salvador </option>
                <option value="Samoa_Occidentales">Samoa Occidentales</option>
                <option value="Samoa_Americaine">Samoa Americaine </option>
                <option value="Sao_Tome_et_Principe">Sao Tome et Principe </option>
                <option value="Senegal">Sénégal </option>
                <option value="Seychelles">Seychelles </option>
                <option value="Sierra Leone">Sierra Leone </option>
                <option value="Singapour">Singapour </option>
                <option value="Slovaquie">Slovaquie </option>
                <option value="Slovenie">Slovénie</option>
                <option value="Somalie">Somalie </option>
                <option value="Soudan">Soudan </option>
                <option value="Sri_Lanka">Sri Lanka </option>
                <option value="Suede">Suede </option>
                <option value="Suisse">Suisse </option>
                <option value="Surinam">Surinam </option>
                <option value="Swaziland">Swaziland </option>
                <option value="Syrie">Syrie </option>

                <option value="Tadjikistan">Tadjikistan </option>
                <option value="Taiwan">Taiwan </option>
                <option value="Tonga">Tonga </option>
                <option value="Tanzanie">Tanzanie </option>
                <option value="Tchad">Tchad </option>
                <option value="Thailande">Thailande </option>
                <option value="Tibet">Tibet </option>
                <option value="Timor_Oriental">Timor Oriental </option>
                <option value="Togo">Togo </option>
                <option value="Trinite_et_Tobago">Trinite et Tobago </option>
                <option value="Tristan da cunha">Tristan de cuncha </option>
                <option value="Tunisie">Tunisie </option>
                <option value="Turkmenistan">Turmenistan </option>
                <option value="Turquie">Turquie </option>

                <option value="Ukraine">Ukraine </option>
                <option value="Uruguay">Uruguay </option>

                <option value="Vanuatu">Vanuatu </option>
                <option value="Vatican">Vatican </option>
                <option value="Venezuela">Vénézuela </option>
                <option value="Vierges_Americaines">Vierges Américaines </option>
                <option value="Vierges_Britanniques">Vierges Britanniques </option>
                <option value="Vietnam">Vietnam </option>

                <option value="Wake">Wake </option>
                <option value="Wallis et Futuma">Wallis et Futuma </option>

                <option value="Yemen">Yemen </option>
                <option value="Yougoslavie">Yougoslavie </option>

                <option value="Zambie">Zambie </option>
                <option value="Zimbabwe">Zimbabwe </option>

            </select>
        </div>

        <br>

        <!-- Poids -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-weight"></i></span>
            </div>
            <input type="text" class="form-control" name="poids" placeholder="Poids (kg)" value="{{ old('poids') }}">
        </div>

        <!-- Gestion d'erreur pour le poids -->
        @if( $errors->has('poids'))
            <p class="erreur">
                {{ $errors->first('poids') }}
            </p>

        @endif

    <!-- Taille -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-ruler-vertical"></i></span>
            </div>
            <input type="text" class="form-control" name="taille" placeholder="Taille (cm)" value="{{ old('taille') }}">
        </div>

        <!-- Gestion d'erreur pour le poids -->
        @if( $errors->has('taille'))
            <p class="erreur">
                {{ $errors->first('taille') }}
            </p>

        @endif

        <br>
        <div id='partenaire'>
            <!-- Diplome -->
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-graduation-cap "></i></span>
                </div>
                <input type="text" class="form-control" name="diplome" placeholder="Dernier diplome" value="{{ old('diplome') }}">
            </div>

            <!-- Gestion d'erreur pour le diplome -->
            @if( $errors->has('diplome'))
                <p class="erreur">
                    {{ $errors->first('diplome') }}
                </p>

            @endif

        <!-- Metier -->
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-briefcase "></i></span>
                </div>
                <input type="text" class="form-control" name="metier" placeholder="Métier actuel" value="{{ old('metier') }}">
            </div>

            <!-- Gestion d'erreur pour le metier -->
            @if( $errors->has('metier'))
                <p class="erreur">
                    {{ $errors->first('metier') }}
                </p>

            @endif

        <!-- experience -->
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-circle"></i></span>
                </div>
                <textarea rows="5" class="form-control" name="experience" placeholder="Experience" value="{{ old('experience') }}"></textarea>
            </div>

            <!-- Gestion d'erreur pour le experience -->
            @if( $errors->has('experience'))
                <p class="erreur">
                    {{ $errors->first('experience') }}
                </p>

            @endif

        <!-- Adresse -->
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-map-pin "></i></span>
                </div>
                <textarea rows="5" class="form-control" name="adresse" placeholder="Adresse" value="{{ old('adresse') }}"></textarea>
            </div>

            <!-- Gestion d'erreur pour le experience -->
            @if( $errors->has('adresse'))
                <p class="erreur">
                    {{ $errors->first('adresse') }}
                </p>

            @endif

        </div>

        <!-- Boutton de confirmation -->
        <center>
            <div class="form-group">
                <input type="submit" value="S'inscrire" class="btn login_btn">
            </div>
        </center>

    </form>

@endsection
