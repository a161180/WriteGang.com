<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Poem;

class AdminHomeController extends Controller
{
    //
    public function index(){
        return view('admin.adminwelcome');
    }

    public function showarticle(){
        $articles = Article::all();
        $no = 1;//utk panggil
        //dd($articles);
        return view ('admin.listarticle', ['articles' => $articles, 'no' => $no]); 
        //return view ('admin.listarticle', , compact('articles')); 
        
    }

    public function articledetail($id){
        //dd($id); //dd($article); utk check
        $article = Article::find($id);
        return view('admin.detailarticle', compact('article'));
    }

    public function articledelete($id){
        $articlzz = Article::find($id);
        //dd($articlzz);
        $articlzz->delete();
        return redirect('/admin/article');
    }

    public function showedit($id){
        $article = Article::find($id);
        return view('admin.showedit', compact('article'));

    }
    public function showeditedit(Request $request ,$id){
        $article = Article::find($id);
        //dd($request);
        $article->update([
            'title'=>$request->title, 
            'content'=>$request->content
        ]);
        return redirect('/admin/article');

    }

    public function showpoem(){
        $poems = Poem::all();
        $no = 1;
        //dd($poems);
        return view ('admin.listpoem', ['poems' => $poems, 'no' => $no]); 
    }

    public function poemdetail($id){
        //dd($id); //dd($article); utk check
        $poem = Poem::find($id);
        return view('admin.detailpoem', compact('poem'));
    }

    public function showeditpoem($id){
        $poem = Poem::find($id);
        return view('admin.showeditpoem', compact('poem'));

    }

    public function showediteditpoem(Request $request ,$id){
        $poem = Poem::find($id);
        //dd($request);
        $poem->update([
            'title'=>$request->title, 
            'content'=>$request->content
        ]);
        return redirect('/admin/poem');

    }

    public function poemdelete($id){
        $poem = Poem::find($id);
        //dd($articlzz);
        $poem->delete();
        return redirect('/admin/poem');
    }

}
