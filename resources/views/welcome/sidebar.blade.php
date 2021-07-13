<div class="col-span-3 bg-white pt-2 shadow rounded-md">
    
    @foreach($competitions as $competition)
        <div class="font-semibold border-gray-200 border-b pl-2 pt-2 pb-2">
            <a href="{{route('comp_detail', [$competition['CompetitionId']])}}">{{$competition['Name']}}</a>
        </div>  
    @endforeach
    
</div>