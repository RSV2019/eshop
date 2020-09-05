<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorypost;
use App\Article;

class BlogController extends Controller
{
    public function indexPosts()
    {
        $categories=Categorypost::get();
        $articles=Article::with('category')->get();
        // dd($articles);
        return view('blog.posts',[
            'categories'=>$categories,
            'articles'=>$articles
            ]);
    }
}
