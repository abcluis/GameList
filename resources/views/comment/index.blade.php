<div class="well">
    <h3>Comentarios de la comunidad</h3>


    @foreach($game->comments as $comment)

        <div class="row">
            <div class="col-sm-1">
                <div class="thumbnail">
                    <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                </div><!-- /thumbnail -->
            </div><!-- /col-sm-1 -->

            <div class="col-sm-11">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>{{ $comment->user->name }}</strong> <span class="text-muted">commented {{ $comment->created_at->diffForHumans() }}</span>
                    </div>
                    <div class="panel-body">
                        {{ $comment->content }}
                    </div><!-- /panel-body -->
                </div><!-- /panel panel-default -->
            </div><!-- /col-sm-5 -->


        </div><!-- /row -->
    @endforeach

</div>