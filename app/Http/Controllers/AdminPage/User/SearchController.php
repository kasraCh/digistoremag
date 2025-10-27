<?php

namespace App\Http\Controllers\AdminPage\User;

use App\Models\AdminPermissionRole;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController
{
    public function index(Request $request)
    {
        $users = User::select('id','name', 'family', 'email', 'created_at')->get(); 

        $adminRole = AdminPermissionRole::pluck('user_id')->toArray();

        $search = $request->search;

        $users = User::where('name', 'LIKE', '%'. $search . '%')->orWhere('email', 'LIKE', '%'. $search . '%')->get();

        return view('adminPage.user.user-list', compact('users', 'adminRole'));
    }
}
