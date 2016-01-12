@extends('master')

@section('content')
    {!!Html::script('js/songs.js')!!}

    <h2>{{ $song->title }}</h2>

{{--    {!! Form::model($song, ['url' => 'songs/'.$song->slug, 'method' => 'PATCH']) !!}--}}
    {!! Form::model($song, ['route' => ['songs.update', $song->slug], "id" => "song-form", 'method' => 'PATCH']) !!}

        @include('songs.form')
    <div class="form-group">
        {!! Form::submit('Update Song', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@stop