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
        $showAdminButton = false;

        $adminRole = AdminPermissionRole::pluck('email')->toArray();
        
        if ($user = Auth::check()) {
            
            if (in_array(auth()->user()->email, $adminRole)) {
                $showAdminButton = true;
            } else {
                $showAdminButton = false;
            }

        }

        $categoryMenu = Category::all();
        
        $search = $request->search;
        
        $article = Article::where('title', 'LIKE', '%'. $search . '%')->paginate(6);

        $blogCategory = false;
        
        return view('digimag.blog.searched-blog', compact('article', 'user', 'showAdminButton', 'categoryMenu', 'blogCategory'));
    }
}
