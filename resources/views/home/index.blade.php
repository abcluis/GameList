@extends('layouts.master')

@section('content')

    <div class="jumbotron">
        <h1>My Game List</h1>
    </div>

    <div class="row carousel-row">
        <div class="col-xs-8 col-xs-offset-2 slide-row">
            <div class="carousel slide slide-carousel" id="carousel-1" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="http://lorempixel.com/150/150?rand=" alt="Image">
                    </div>
                    <div class="item">
                        <img src="http://lorempixel.com/150/150?rand=" alt="Image">
                    </div>
                    <div class="item">
                        <img src="http://lorempixel.com/150/150?rand=" alt="Image">
                    </div>
                </div>
            </div>
            <div class="slide-content">
                <h4>Example product</h4>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat
                </p>
            </div>
            <div class="slide-footer">
                <span class="pull-right buttons">
                    <button class="btn btn-sm btn-default"><i class="fa fa-fw fa-eye"></i> Show</button>
                    <button class="btn btn-sm btn-primary"><i class="fa fa-fw fa-shopping-cart"></i> Buy</button>
                </span>
            </div>
        </div>
    </div>

    <hr>

    @include('partials.info')

    <hr>


    <div class="container">
        <div class="row">


            @foreach($games as $game)

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="{{ route('game.single', ['id' => $game->id]) }}">
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
        <a class="btn btn-primary" href="{{ route('game.create') }}">Agregar</a>
    </div>





@endsection