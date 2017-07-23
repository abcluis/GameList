@extends('layouts.master')

@section('content')

    @include('partials.info')

    <div class="jumbotron">
        <h1>{{ $game->name }}</h1>

        @can('addedfavorite',$game)
            <form action="{{ route('favorites.store') }}" method="POST">
                <button class="btn btn-danger pull-right" type="submit">
                    <input type="hidden" value="{{ $game->id }}" name="id">
                    {{ csrf_field() }}
                    <i class="fa fa-plus"> Favorites </i>
                </button>
            </form>

        @endcan

        @cannot('addedfavorite',$game)
            <form action="{{ route('favorites.destroy',['id' => $game->id ]) }}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" value="{{ $game->id }}" name="id">
                {{ csrf_field() }}
                <button class="btn btn-danger pull-right active" type="submit">
                    <i class="fa fa-minus"> Favorites </i>
                </button>
            </form>
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
            <form action="{{ route('games.destroy', ['id' => $game->id]) }}" method="POST" role="form">
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $game->id }}">
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>

        </div>
    @endif

    @include('comment.index')
    @include('comment.create')
@endsection