<div class="col-span-3 bg-white pt-2 shadow rounded-md max-h-96">
    @foreach($comp_detail['Seasons'] as $season)
        <div class="font-semibold border-gray-200 border-b pl-2 pt-2 pb-2">
            <a href="{{route('rounds', [$season['Rounds'][0]['RoundId'], 'season' => $season['Season'], $season['Rounds'][0]['RoundId']])}}">
                {{$season['Name']}}
            </a>
        </div> 
    @endforeach
</div>