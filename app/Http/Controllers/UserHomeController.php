<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Poem;

class UserHomeController extends Controller
{
    //

    public function index(){
        return view('user.userwelcome');
    }

    public function showarticle(){
        $article = Article::all();
        $no = 1;
        return view ('user.listarticle', ['articles' => $article, 'no' => $no]); 
    }
    
    public function articledetail($id){
        //dd($id); //dd($article); utk check
        $article = Article::find($id);
        return view('user.detailarticle', compact('article'));
    }

    public function articledelete($id){
        $article = Article::find($id);
        //dd($articlzz);
        $article->delete();
        return redirect('/user/article');
    }

    public function submitarticle(){
        return view('user.submitarticle');

    }

    public function articleprocess(Request $request){
        //dd($request);
        $name = $request->title;
        // dd($name);
        $content = $request->content;
        // dd($content);
        Article::create([
            'title'=>$name,
            'content'=>$content
        ]);
        return redirect('/user/article');
    }

    public function showedit($id){
        $article = Article::find($id);
        return view('user.showedit', compact('article'));
    }

    public function showeditedit($id){
        $article = Article::find($id);
        //dd($request);
        $name = $request->title;
        $content = $request->content;
        $article->update([
            'title'=>$name,
            'content'=>$content
        ]);
        return redirect('/user/article');
    }

    public function showpoem(){
        $poem = Poem::all();
        $no = 1;
        //dd($poems);
        return view ('user.listpoem', ['poems' => $poem, 'no' => $no]);   
    }

    public function poemdetail($id){
        //dd($id); //dd($article); utk check
        $poem = Poem::find($id);
        return view('user.detailpoem', compact('poem'));
    }

    public function submitpoem(){
        return view('user.submitpoem');

    }

    public function poemprocess(Request $request){
        //dd($request);
        $name = $request->title;
        // dd($name);
        $content = $request->content;
        // dd($content);
        Poem::create([
            'title'=>$name,
            'content'=>$content
        ]);
        return redirect('/user/poem');
    }

    public function showeditpoem($id){
        $poem = Poem::find($id);
        return view('user.showeditpoem', compact('poem'));
    }

    public function showediteditpoem(Request $request ,$id){
        $poem = Poem::find($id);
        //dd($request);
        $poem->update([
            'title'=>$request->title, 
            'content'=>$request->content
        ]);
        return redirect('/user/poem');
    }

    public function poemdelete($id){
        $poem = Poem::find($id);
        //dd($articlzz);
        $poem->delete();
        return redirect('/user/poem');
    }
}