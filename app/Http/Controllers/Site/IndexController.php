<?php

namespace App\Http\Controllers\Site;

use App\Models\AdminPermissionRole;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexController
{
    public function index()
    {

        $article = Article::all();

        $article = Article::paginate(3);

       $adminRole = AdminPermissionRole::pluck('user_id')->toArray();

       $showAdminButton = false;

       if (Auth::check()) {

           if (in_array(auth()->user()->id, $adminRole)) {
               $showAdminButton = true;
           }
       }

        $items = Article::withCount('comments')
            ->orderByDesc('comments_count')
            ->take(5)
            ->get();

        $categoryMenu = Category::all();

        $blogCategory = false;

        $lastThreeItem = Article::orderby('created_at', 'desc')->take(3)->get();

        return view('site.index', compact('article', 'categoryMenu', 'blogCategory', 'lastThreeItem', 'items', 'showAdminButton'));
    }

    public function showCategory(Request $categorys)
    {
        $adminRole = AdminPermissionRole::pluck('user_id')->toArray();

        $showAdminButton = false;

        if (Auth::check()) {

            if (in_array(auth()->user()->id, $adminRole)) {
                $showAdminButton = true;
            }
        }

        $blogCategory = $categorys->category;

        $category = Category::where('category' , $blogCategory)->first();

        $categoryId = $category->id;

        $article = Article::where('category_id', $categoryId)->get();

        $categoryMenu = Category::all();

        $categoryMenu = Category::withCount('articles')->get();

        return view('site.blog.searched-blog', compact('article', 'categoryMenu', 'blogCategory', 'showAdminButton'));

    }
}
