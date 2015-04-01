@extends('app')

@section('content')

    <div class="container">
        Editar: <h1>{{$article->title }}</h1>
        {!! Form::model($article, ['method' => 'PATCH', 'action' => ['HomeController@update', $article->id]]) !!}


        @include('partials.form',['buttonSubmit'=>'Actualizar Articulo'])

        {!! Form::close() !!}
    </div>


@stop