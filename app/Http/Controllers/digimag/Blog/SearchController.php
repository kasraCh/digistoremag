<?php

namespace App\Http\Controllers\digimag\Blog;

use App\Models\AdminPermissionRole;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController
{
    public function index(Request $request)
    {
        $adminRole = AdminPermissionRole::pluck('user_id')->toArray();

        $showAdminButton = false;

        if (Auth::check()) {

            if (in_array(auth()->user()->id, $adminRole)) {
                $showAdminButton = true;
            }
        }

        $categoryMenu = Category::all();
        
        $search = $request->search;
        
        $article = Article::where('title', 'LIKE', '%'. $search . '%')->paginate(6);

        $blogCategory = false;
        
        return view('digimag.blog.searched-blog', compact('article', 'showAdminButton', 'categoryMenu', 'blogCategory'));
    }
}
