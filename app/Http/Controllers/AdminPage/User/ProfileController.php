<?php

namespace App\Http\Controllers\AdminPage\User;

use Illuminate\Http\Request;

class ProfileController
{
    public function index()
    {
        return view('adminPage.user.user-profile');
    }
}
