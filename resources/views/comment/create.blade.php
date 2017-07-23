<div class="well">

    @include('partials.errors')

    <div class="row">
        <div class="col-sm-12">
            <h3>Agregar comentario</h3>

            <form action="{{ route('comments.store', ['$game' => $game->id ]) }}" method="POST" role="form">


                <div class="form-group">
                    <textarea type="text" class="form-control" name="content" id="content" placeholder="Escribe tu comentario..."></textarea>
                </div>

                {{ csrf_field() }}

                <button type="submit" class="btn btn-success">Send</button>
            </form>
        </div>

    </div>
</div>