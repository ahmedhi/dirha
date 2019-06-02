<div>
        @foreach( $aliments as $aliment)
                <img src="/img/aliment/{{ $aliment['nom'] }}.png " style="height: 50px ; width: 50px">
        @endforeach
</div>