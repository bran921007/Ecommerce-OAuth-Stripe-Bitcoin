<?php namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
//use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;
use Carbon\Carbon;
use App\Article;
use Auth;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

    public function agregar(){

        $articulo = [
          'title'=>'Lord of the ring',
          'published_at'=>Carbon::now(),
          'body'=>'diglesica'

        ];
        $article = Article::create($articulo);

        return $article->toArray();
    }

    public function inicio()
    {
        //$article = Article::all();
        return view('index');
    }

    public function diglesica()
    {

    }

    public function create()
    {
//
        return view('create');
    }

    public function store(ArticleRequest $request)
    {

        $request = $request->all();
        $request['user_id'] = Auth::user()->id;
        Article::create($request);
        return redirect('/')->with(['success'=>'true','msg'=>'Post creado satisfactoriamente']);

    }

    public function update($id, ArticleRequest $request){
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('/')->with(['success'=>'true','msg'=>'Post creado satisfactoriamente']);;
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('update',compact('article'));
    }

    public function delete($id, ArticleRequest $request)
    {

    }

    //        $article = new Article();
//        \Auth::user()->article()->create(Request::all());
//        Otra forma, la mas convencional de hacer lo mismo de arriba, guardar el user_id con el Auth::user()->id
//        $request = $request->all();
//        $request['user_id'] = Auth::id();
//        Article::create($request->all());


//         Auth::user()->article()->create($request->all());



}
