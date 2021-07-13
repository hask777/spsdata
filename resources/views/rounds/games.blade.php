<div class="col-span-6">
    <div class="shadow rounded-md bg-white">
        @foreach ($rounds as $round)
            <a href="{{route('game', [$round['GameId']])}}">
                <div class="flex flex-row justify-between  font-semibold border-gray-200 border-b pl-2 pt-2 pb-2 pr-2">
                    <div class="">
                        {{$round['DateTime']}}
                    </div>
                    <div>
                        {{$round['AwayTeamName']}}
                    </div>
                    <div class="flex">
                        <div>
                            {{$round['AwayTeamScore']}}
                        </div>
                        <span>:</span>
                        <div>
                            {{$round['HomeTeamScore']}}
                        </div>
                    </div>
                    <div>
                        {{$round['HomeTeamName']}}
                    </div>
                    <div>
                        {{$round['Status']}}
                    </div>
                    <div>
                        {{$round['Season']}}
                    </div>        
                </div>   
            </a>        
        @endforeach
    </div>   
</div>