@extends('master')

@section('content')
    {!! link_to_route('songs.create', "Create New Song", null, array('class'=>"btn btn-primary active")) !!}
    <table class="table table-striped">
        <tr>
            <th>Song Title</th>
            <th>Slug</th>
            <th>Action</th>
        </tr>

    @foreach($songs as $song)
        <tr>
            <td>{!! link_to_route('songs.show', $song->title, [$song->slug]) !!}</td>
            <td>{!! $song->slug !!}</td>
            <td>
            {!! link_to_route('songs.edit', "Edit", [$song->slug]) !!}
                    </td>

            <!--{{--<a href="/songs/{{ $song->slug }}"> --}}-->
            <!--{{--<a href="{{ route('song_path', [$song->slug]) }}" >--}}
                {{--{{ $song->title }}--}}
            {{--</a>--}} -->
        </tr>
    @endforeach
    </table>

@stop