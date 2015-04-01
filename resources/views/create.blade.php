@extends('app')

@section('content')
    <div class="container">
        {!! Form::open(['action' => 'HomeController@store'])!!}

        @include('partials.form')

        {!! Form::close() !!}
    </div>


@stop
