@foreach($aliments as $Al)
    <?php
        list( $nom , $Quant ) = explode( ":" , $Al);
    ?>
    <img src="img/aliment/{{ $nom }}.png" height="75px" width="75px">
@endforeach