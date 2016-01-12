@extends('master')

@section('content')
    {!!Html::script('js/songs.js')!!}
    <h2>Add a new Song</h2>

    {!! Form::open(['route' => 'songs.store', "id" => "song-form"]) !!}

        @include('songs.form')
    <div class="form-group">
        {!! Form::submit('Create Song', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@stop