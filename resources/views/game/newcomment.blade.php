<div class="well">

    @include('partials.errors')

    <div class="row">
        <form action="{{ route('game.newcomment') }}" method="post" role="form">
            <legend>Agregar comentario</legend>

            <div class="form-group">
                <textarea type="text" class="form-control" name="content" id="content" placeholder="Escribe tu comentario..."></textarea>
            </div>

            <input type="hidden" value="{{ $game->id }}" name="id" id="id">

            {{ csrf_field() }}

            <button type="submit" class="btn btn-success">Send</button>
        </form>
    </div>
</div>