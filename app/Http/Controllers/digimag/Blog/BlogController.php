<?php

namespace App\Http\Controllers\digimag\Blog;

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

        if ($user = Auth::check()) {

            if (in_array(auth()->user()->email, $adminRole)) {
                $showAdminButton = true;
            } else {
                $showAdminButton = false;
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

        // dd($comments->all();

        return view('digimag.blog.blog', compact('article', 'user', 'showAdminButton', 'categorys', 'blog', 'author', 'checkAuth', 'comments'));
    }
}
