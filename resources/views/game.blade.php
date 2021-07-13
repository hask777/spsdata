@extends('layouts.base')
@section('content')
<div class="p-4 m-auto grid grid-cols-12 gap-4">
    <div class="col-span-10">
        <div class="shadow rounded-md bg-white mb-4">
            <div class="flex flex-row justify-between  font-semibold border-gray-200 border-b pl-2 pt-2 pb-2 pr-2">
                <div class="flex space-x-4">
                    
                        <div class="border-gray-200 border-r p-2 cursor-pointer">Game</div>
                        <div class="border-gray-200 border-r p-2 cursor-pointer">Coaches</div>
                        <div class="border-gray-200 border-r p-2 cursor-pointer">Referee</div>
                        <div class="border-gray-200 border-r p-2 cursor-pointer">Lineups</div>
                        <div class="border-gray-200 border-r p-2 cursor-pointer">Goals</div>
                        <div class="border-gray-200 border-r p-2 cursor-pointer">Referee</div>
                        <div class="border-gray-200 border-r p-2 cursor-pointer">Bookings</div>
                        <div class="border-gray-200 border-r p-2 cursor-pointer">PenaltyShootouts</div>
                        <div class="border-gray-200 border-r p-2 cursor-pointer">TeamGames</div>
                        <div class="border-gray-200 border-r p-2 cursor-pointer">PlayerGames</div>
                    
                    
                </div>
            </div>
        </div>
        
        <div class="shadow rounded-md bg-white">
            <div class="flex flex-row justify-between  font-semibold border-gray-200 border-b pl-2 pt-2 pb-2 pr-2">
                <div class="">
                    {{$game['Game']['Day']}}
                </div>
                <div class="flex">
                    <a href="{{route('team_detail', [ $game['Game']['AwayTeamId'], $game['Game']['RoundId'] ]) }}">{{$game['Game']['AwayTeamName']}}</a>
                    
                    <span class="ml-2">
                        <img src="https://www.countryflags.io/{{strtolower($game['Game']['AwayTeamCountryCode'])}}/flat/64.png">
                    </span>

                </div>
                <div class="flex">
                    <div>
                        {{$game['Game']['AwayTeamScore']}}
                    </div>
                    <span>:</span>
                    <div>
                        {{$game['Game']['HomeTeamScore']}}
                    </div>
                </div>
                <div class="flex mr-2">
                    {{$game['Game']['HomeTeamName']}}
                    <span class="ml-2">
                        <img src="https://www.countryflags.io/{{strtolower($game['Game']['HomeTeamCountryCode'])}}/shiny/64.png">
                    </span>
                </div>
                <div>
                    {{$game['Game']['Status']}}
                </div>  
                <div>
                    {{$game['Game']['Group']}}
                </div>      
            </div>

            <div class="flex flex-row   font-semibold border-gray-200 border-b pl-2 pt-2 pb-2 pr-2">
                <div class="mr-4">
                    <span>Formation :</span>
                </div>
                <div class="flex">
                    <div>
                        {{$game['Game']['AwayTeamFormation']}}
                    </div>
                    <span>:</span>
                    <div>
                        {{$game['Game']['HomeTeamFormation']}}
                    </div>
                </div>
            </div>

            <div class="flex flex-row   font-semibold border-gray-200 border-b pl-2 pt-2 pb-2 pr-2">
                <div class="mr-4">
                    <span>Score Period One :</span>
                </div>
                <div class="flex justify-center">
                    <div>
                        {{$game['Game']['AwayTeamScorePeriod1']}}
                    </div>
                    <span>:</span>
                    <div>
                        {{$game['Game']['HomeTeamScorePeriod1']}}
                    </div>
                </div>
            </div>
            
            <div class="flex flex-row   font-semibold border-gray-200 border-b pl-2 pt-2 pb-2 pr-2">
                <div class="mr-4">
                    <span>Score Period Two :</span>
                </div>
                <div class="flex justify-center">
                    <div>
                        {{$game['Game']['AwayTeamScorePeriod2']}}
                    </div>
                    <span>:</span>
                    <div>
                        {{$game['Game']['HomeTeamScorePeriod2']}}
                    </div>
                </div>
            </div>
                
        </div>  
        
        <div class="shadow rounded-md bg-white mt-4">
            <div class="flex flex-row justify-between  font-semibold border-gray-200 border-b pl-2 pt-2 pb-2 pr-2">
                <div>Coaches: </div>
                <div class="flex justify-between w-full">
                    <div class="ml-4">
                        {{$game['AwayTeamCoach']['ShortName']}}
                        <span>{{$game['AwayTeamCoach']['Nationality']}}</span>
                    </div>
                    <span>:</span>
                    <div class="mr-4">
                        {{$game['HomeTeamCoach']['ShortName']}}
                        <span>{{$game['HomeTeamCoach']['Nationality']}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection