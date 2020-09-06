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

    public function getArticlesByCategory($category_id)
    {
        $categories=Categorypost::get();
        // varianta 1  $category=Categorypost::where('id',$category_id)->first();
        // varianta 2 este:
        $category=Categorypost::with('articles')->find($category_id);
        
        
        // $articles=Article::where('category_id',$category_id)->get();
        return view('blog.posts_category',[
            'articles'=>$category->articles,
            'categories'=>$categories,
            'cat'=>$category

        ]);
    }

    public function getArticleById($article_id)
    {
        $article=Article::with('category')->find($article_id);
        return view('blog.post',[
            'article'=>$article
        ]);
    }

}
