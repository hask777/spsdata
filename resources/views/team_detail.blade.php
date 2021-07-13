@foreach ($team as $player)
    <div>
        <a href="{{route('player', $player['PlayerId'])}}">
            {{$player['CommonName']}}
        </a>
    </div>
@endforeach