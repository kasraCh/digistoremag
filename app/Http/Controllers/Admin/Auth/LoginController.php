<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Requests\Auth\UserLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(UserLoginRequest $request)
    {
        $data = $request->validated();

        if (Auth::attempt($data)) {
                $request->session()->regenerate();

                return to_route('digimag.index');
        } else {
            return redirect()->back()->with('error', '.پسورد یا ایمیل شما صحیح نمیباشد');
        }
    }
}
