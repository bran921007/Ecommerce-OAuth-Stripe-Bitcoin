@extends('app')

@section('content')
    <div class="container">
        {!! Form::open(['action' => 'HomeController@store'])!!}

        @include('partials.form',['buttonSubmit'=>'Actualizar Articulo'])

        {!! Form::close() !!}
    </div>


@stop
