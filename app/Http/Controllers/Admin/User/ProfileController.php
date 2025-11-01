<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;

class ProfileController
{
    public function index()
    {
        return view('admin.user.user-profile');
    }
}
