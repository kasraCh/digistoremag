<?php

namespace App\Http\Controllers\AdminPage\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController
{
    public function logout()
    {
        Auth::logout();

        return to_route('digimag.index');
    }
}
