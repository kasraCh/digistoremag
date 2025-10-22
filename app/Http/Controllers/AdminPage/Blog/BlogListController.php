<?php

namespace App\Http\Controllers\AdminPage\Blog;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogListController
{
    public function index()
    {
        $articles = Article::all();

        // $article = Article::where('title', 'LIKE', '%'. $search . '%')->paginate(6);

        return view('adminPage.blog.blogs-list', compact('articles'));
    }
}
