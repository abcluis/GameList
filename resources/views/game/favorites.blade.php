@extends('layouts.master')

@section('content')
    <div class="jumbotron text-center">
        <h1>My favorites games</h1>
    </div>

    <div class="container">

        @foreach($favorites as $favorite)

            <div class="list-group">
                <a href="{{ route('game.single',['id' => $favorite->game->id]) }}" class="list-group-item">
                    <h4 class="list-group-item-heading">{{ $favorite->game->name }}</h4>
                    <p class="list-group-item-text">{{ $favorite->game->description }}</p>
                </a>
            </div>
        @endforeach

    </div>

@endsection