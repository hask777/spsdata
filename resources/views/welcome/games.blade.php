<div class="col-span-6">
    <div class="shadow rounded-md bg-white">
        @foreach ($today as $game)
            <a href="{{route('game', [$game['GameId']])}}">
                <div class="flex flex-row justify-between  font-semibold border-gray-200 border-b pl-2 pt-2 pb-2 pr-2">
                    <div class="">
                        {{$game['DateTime']}}
                    </div>
                    <div>
                        {{$game['AwayTeamName']}}
                    </div>
                    <div class="flex">
                        <div>
                            {{$game['AwayTeamScore']}}
                        </div>
                        <span>:</span>
                        <div>
                            {{$game['HomeTeamScore']}}
                        </div>
                    </div>
                    <div>
                        {{$game['HomeTeamName']}}
                    </div>
                    <div>
                        {{$game['Status']}}
                    </div>       
                </div>   
            </a>        
        @endforeach
    </div>   
</div>