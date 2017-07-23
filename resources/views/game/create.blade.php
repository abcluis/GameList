@extends('layouts.master')

@section('content')

    @include('partials.errors')

    <div class="container">
        <div class="row">
            <form action="{{ route('games.store') }}" method="post" role="form">
                <legend>New Videogame</legend>

                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name...">
                </div>
                <div class="form-group">
                    <label for="">Year</label>
                    <input type="text" class="form-control" name="year" id="year" placeholder="Year...">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="description" id="description"
                           placeholder="Description...">
                </div>

                @foreach($tags as $tag)
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
                            {{ $tag->name }}
                        </label>
                    </div>
                @endforeach

                {{ csrf_field() }}

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>

@endsection