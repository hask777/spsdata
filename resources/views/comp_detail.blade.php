@extends('layouts.base')
@section('content')
    <div class="p-4 m-auto grid grid-cols-12 gap-4">
        @include('welcome.sidebar')
        @include('competition.tables.current') 
        @include('competition.tables.seasons')
    </div>
@endsection
