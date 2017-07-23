<h3>Ultimos videojuegos añadidos</h3>

@foreach($lastgames as $game)

    <div class="row">
        <a href="{{ route('games.show',['id' => $game->id]) }}">
            <div class="col-md-5">
                <img src="{{ $game->image }}" alt="" width="100%">
            </div>
            <div class="col-md-7">
                {{ $game->name }}
            </div>
        </a>


    </div>
    <hr>
@endforeach