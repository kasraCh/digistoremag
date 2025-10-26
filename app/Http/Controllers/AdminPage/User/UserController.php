<?php

namespace App\Http\Controllers\AdminPage\User;

use App\Models\AdminPermissionRole;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController
{
    public function index()
    {
        $users = User::select('id','name', 'family', 'email', 'created_at')->get();

        $adminRole = AdminPermissionRole::pluck('user_id')->toArray();

        return view('adminPage.user.user-list', compact('users', 'adminRole'));
    }
    
}
