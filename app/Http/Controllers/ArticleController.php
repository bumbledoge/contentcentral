<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index () {
        return view('dashboard', ['articles' => Article::all()]);
    }

    public function createArticle(Request $request) {

        // \Log::info(json_encode($request->all()));
        
        $newArticle = new Article;
        $newArticle->title = $request->title;
        $newArticle->author = $request->author;
        $newArticle->category = $request->category;
        $newArticle->content = $request->content;

        $newArticle->save();
        
        return redirect()->route('dashboard')->with('success', 'Record deleted successfully');
    }

    public function readArticle($id) {

        $data = Article::find($id);
        return view('article', compact('data'));
    }

    public function deleteArticle(Request $request) {
        $article = Article::find($request->id);
        $res = $article->delete();

        return redirect()->route('dashboard')->with('success', 'Record deleted successfully');
    }

    public function editArticle(Request $request) {
        $article = Article::edit($request->id);
    }
}
