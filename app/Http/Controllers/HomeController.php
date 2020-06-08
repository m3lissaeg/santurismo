<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Article;

class HomeController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles = Article::all();
        return view('home')->with('articles', $articles) ;
    }
    
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        // dd($request);
        $article = new Article();
        $article->title = $request->title;
        $article->user_id = auth()->id();
        $article->abst = $request->abst;
        $article->body = $request->body;
        $article->mediapath = $request->mediapath;

        $article->save();
        return redirect()->route('home');
    }

    public function destroy($id){
        dd('delete funciona');
        $a = Article::findOrFail($id);
        $a->delete();
        
        return redirect()->route('home');

        //se ejecuta desde la vista index
    }
}
