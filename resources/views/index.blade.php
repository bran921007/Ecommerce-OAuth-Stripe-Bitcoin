@extends('app')

@section('content')

<div class="container" style="margin-top: 35px">
    <div class="page-header page-heading">
        <h1 class="pull-left">Forums</h1>

        <ol class="breadcrumb pull-right where-am-i">
            <li><a href="#">Forums</a></li>
            <li class="active">List of topics</li>
        </ol>
        <div class="clearfix"></div>
    </div>
    <p class="lead">This is the right place to discuss any ideas, critics, feature requests and all the ideas regarding our website. Please follow the forum rules and always check FAQ before posting to prevent duplicate posts.</p>
    <a href="/articles/create"  class="btn btn-primary">Crear Articulo</a>
    <table class="table forum table-striped">
        <thead>
        <tr>
            <th class="cell-stat"></th>
            <th>
                <h3>Important</h3>
            </th>
            <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
            <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
            <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
        </tr>
        </thead>
        <tbody>
        @foreach(App\Article::paginate(5) as $article)
        <tr>
            <td class="text-center"><i class="fa fa-question fa-2x text-primary"></i></td>
            <td>
                <h4><a href="{{url('articles/'.$article->id.'/edit')}}">{{$article->title}}</a><br><small>{{$article->body}}</small></h4>
            </td>
            <td class="text-center hidden-xs hidden-sm"><a href="#">9 542</a></td>
            <td class="text-center hidden-xs hidden-sm"><a href="#">89 897</a></td>
            <td class="hidden-xs hidden-sm">by <a href="#">John Doe</a><br><small><i class="fa fa-clock-o"></i> 3 months ago</small></td>
        </tr>

        @endforeach
        </tbody>
    </table>
    {!! App\Article::paginate(5)->render()  !!}

</div>
</div>

   @stop

