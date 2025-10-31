<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Models\Article;
use Illuminate\Http\Request;

class UserBlogsController
{
    public function index()
    {
        $articles = Article::all();

        return view('adminPage.blog.user-blogs', compact('articles'));
    }
}