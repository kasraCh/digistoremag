<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogListController
{
    public function index()
    {
        $articles = Article::all();

        return view('admin.blog.blogs-list', compact('articles'));
    }
}
