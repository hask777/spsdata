@foreach($teams as $team)
<div>
    <a href="{{route('team_detail', $team['TeamId'])}}">{{$team['Name']}}</a>
    
</div>

@endforeach