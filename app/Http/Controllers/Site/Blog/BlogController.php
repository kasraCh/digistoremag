<?php

namespace App\Http\Controllers\Site\Blog;

use App\Models\AdminPermissionRole;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController
{
    public function index($id)
    {
        $article = Article::all();

        $showAdminButton = false;

        $adminRole = AdminPermissionRole::pluck('user_id')->toArray();

        if (Auth::check()) {

            if (in_array(auth()->user()->id, $adminRole)) {
                $showAdminButton = true;
            }
        }

        $blog = Article::findOrFail($id);

        $categorys = Category::all();

        $author = Article::with(['user', 'category'])->find($id);

        $checkAuth = false;

        if (Auth::check()) {
            $checkAuth = true;
        } else {
            $checkAuth = false;
        }

        $comments = Comment::where('id', $id)->select('comment')->get();
        
        return view('site.blog.blog', compact('article', 'showAdminButton', 'categorys', 'blog', 'author', 'checkAuth', 'comments'));
    }

    public function allBlog(Request $request) 
    {
        $adminRole = AdminPermissionRole::pluck('user_id')->toArray();

        $showAdminButton = false;

        if (Auth::check()) {

            if (in_array(auth()->user()->id, $adminRole)) {
                $showAdminButton = true;
            }
        }

        $query = Article::query();

        if ($request->sort == 'newest') {
            $query->orderBy('created_at', 'desc');
        } elseif ($request->sort == 'oldest') {
            $query->orderBy('created_at', 'asc');
        }

        $article = $query->get();

        $categoryMenu = Category::all();

        $categoryMenu = Category::withCount('articles')->get();

        $blogCategory = null;

        return view('site.blog.all-blogs', compact('categoryMenu', 'blogCategory', 'showAdminButton', 'article'));
    }

    public function sortBlog($sort) 
    {
        return $sort;
    }
}
