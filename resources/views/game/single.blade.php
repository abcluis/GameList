@extends('layouts.master')

@section('content')

    @include('partials.info')

    <div class="jumbotron">
        <h1>{{ $game->name }}</h1>

        @can('addedfavorite',$game)
            <a class="btn btn-danger pull-right" href="{{ route('game.favorite', ['id' => $game->id]) }}"><i
                        class="fa fa-plus"> Favorites </i></a>
        @endcan

        @cannot('addedfavorite',$game)
            <a class="btn btn-danger pull-right active" href="{{ route('game.nofavorite', ['id' => $game->id]) }}"><i
                        class="fa fa-minus"> Favorites </i></a>
        @endcannot


        <a class="btn btn-danger pull-right"><i class="fa fa-heart"> {{ count($game->favorites) }} </i></a>

    </div>

    <div class="row">
        <p class="well">
            {{ $game->description }}
        </p>
    </div>

    <p>
        Visitas : {{ $game->visit }}
    </p>

    @if(Auth::id() == $game->user_id)
        <div class="row">
            <a href="{{ route('game.delete', ['id' => $game->id]) }}" class="btn btn-danger">Delete</a>
        </div>
    @endif

    @include('game.comments')
    @include('game.newcomment')
@endsection