<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Requests\Auth\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController
{
    public function index()
    {
        return view('admin.auth.register');
    }

    public function action(UserRegisterRequest $request)
    {
        $data = $request->validated();
            
        $user = User::create($data);
            
        Auth::login($user);

        return to_route('digimag.index');
    }
}
