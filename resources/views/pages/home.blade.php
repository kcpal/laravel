@extends('master')

@section('content')

    <!--<h1><?//= $name; ?></h1>-->
    <h1>{!! $name !!}</h1>

    @foreach($lessons as $lesson)
        <h2>{{ $lesson }}</h2>
    @endforeach

<!--    <?php// foreach($lessons as $lesson) : ?>
      <h2><?//= $lesson; ?></h2>
    <?php //endforeach; ?> -->

@stop