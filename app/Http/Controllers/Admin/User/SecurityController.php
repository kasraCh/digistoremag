<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Requests\AdminPage\User\ChangeUserPasswordRequest;
use App\Http\Requests\AdminPage\User\EditNameRequest;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SecurityController
{
    public function index()
    {
        $blogs = Article::select('id', auth()->user()->id);

        return view('admin.user.user-security', compact('blogs'));
    }

    public function editPassword(ChangeUserPasswordRequest $request)
    {
        $request->validated();

        auth()->user()->update([
            'password' => Hash::make($request->newPassword)
        ]);

        return redirect()->back()->with('password-success', 'پسورد با موفقیت تغییر یافت');
    }

    public function editname(EditNameRequest $request)
    {

        $request->validated();

        auth()->user()->update([
            'name' => $request->name,
            'family' => $request->family
        ]);

        return redirect()->back()->with('info-success', 'اطلاعات شما با موفقیت تغییر یافت');

    }
}