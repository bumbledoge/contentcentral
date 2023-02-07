<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //

    public function createArticle(Request $request) {

        // \Log::info(json_encode($request->all()));
        
        $newArticle = new Article;
        $newArticle->title = $request->title;
        $newArticle->author = $request->author;
        $newArticle->category = $request->category;
        $newArticle->content = $request->content;

        $newArticle->save();
        
        return view('dashboard');
    }
}
