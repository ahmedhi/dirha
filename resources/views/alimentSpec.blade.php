<head>
    <script type="text/javascript" src="js/menu.js"></script>
</head>
<div id="Value" class="row" style="align-content: center">
    <div class="col-2">
        <img src="img/Aliments/{{ $Aliment->nom }}.png" width="75px" height="75px">
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
                    Fibres
                </th>
            </tr>
            <tr>
                <td>
                    {{ $Aliment->energie_Kcal }}
                </td>
                <td>
                    {{ $Aliment->proteines }}
                </td>
                <td>
                    {{ $Aliment->glucides }}
                </td>
                <td>
                    {{ $Aliment->fibres }}
                </td>
            </tr>
        </table>
    </div>

</div>
<div class="row">
    <input class="rhs" type="number" min="0" value="0" id="nbr"> Unité(s)
        <br>
    <button onclick="actualiserMenu( '{{ $type }}' , '{{$Aliment->nom}}', document.getElementById('nbr').value )">Ajouter au menu</button>
</div>
