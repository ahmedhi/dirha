<br><br><br>

<div id="Value" style="align-content: center" >
    <div class="row">
    <div class="col-md-2">
        <img src="img/aliment/{{ $Aliment->img }}" width="75px" height="75px">
        <br> Pour 100 g
    </div>
        <div class="col">
    <table class="table-borderless TableAliment" style="width: 100%;height: 100%;">
        <tr >
            <th >
                Kcal
            </th>
            <th >
                Protéines
            </th>
            <th>
                Glucides
            </th>
            <th >
                Fibres
            </th>
            <th>
                Quantités
            </th>
        </tr>
        <tr >
            <td id="Kcal">
                {{ $Aliment->energie_Kcal }}
            </td>
            <td id="Proteine">
                {{ $Aliment->proteines }}
            </td>
            <td id="Glucide">
                {{ $Aliment->glucides }}
            </td>
            <td id="Fibre">
                {{ $Aliment->fibres }}
            </td>
            <td>
                <input class="rhs" type="number" min="0" value="1" id="nbr" style="border: 0px;background: transparent;text-align: center; width: 100px;" onclick="cal({{ $Aliment->energie_Kcal }} , {{ $Aliment->proteines }} , {{ $Aliment->glucides }} , {{ $Aliment->fibres }})">
            </td>
        </tr>
    </table>
        </div>
    </div>

</div>

<br>
<div class="row">
    <div class="col">

        <div class="" style="text-align: center;">
            <button class="icon-btn add-btn" onclick="actualiserMenu( '{{ $type }}' , '{{$Aliment->nom}}', document.getElementById('nbr').value )">
                <div class="add-icon"></div>
                <div class="btn-txt">Ajouter</div>
            </button>
        </div>
    </div>

</div>
