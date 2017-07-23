@extends('layouts.master')

@section('content')


    <hr>

    @include('partials.info')

    <hr>


    <div class="container">
        <div class="row">


            @foreach($games as $game)

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="{{ route('games.show', ['id' => $game->id]) }}">
                        <div class="caption">
                            <h3>{{  $game->name }}</h3>
                            <p class="small">{{ $game->year }}</p>
                        </div>
                        <img class="img-responsive" src={{$game->image}} alt="">
                        @foreach($game->tags as $tag)
                            {{ $tag->name }}
                        @endforeach

                        <p class="small">Author : {{ $game->user->name }}</p>
                    </a>
                </div>
            @endforeach
        </div>
        <h3>Existe algun juego que no encuentras?? Agregalo!!</h3>
        <a class="btn btn-primary" href="{{ route('games.create') }}">Agregar</a>
    </div>





@endsection