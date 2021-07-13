@extends('layouts.base')
@section('content')
    @foreach ($team as $player)
        <div>
            <img src="{{$player['PhotoUrl']}}" alt="">
        </div>
    @endforeach
@endsection