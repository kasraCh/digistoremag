<?php

namespace App\Http\Controllers\AdminPage\User;

use App\Models\AdminPermissionRole;
use Illuminate\Http\Request;

class AdminPermissionController
{
    public function index($email, $user_id)
    {
        $info = [
            'user_id' => $user_id
        ];

        AdminPermissionRole::create($info);

        return redirect()->back()->with('success', 'کاربر به لیست ادمین اضافه شد');
    }

    public function delete($user_id){

        $user = AdminPermissionRole::where('user_id' , $user_id)->delete();

        return redirect()->back()->with('success', 'کاربر از لیست ادمین ها حذف شد');

    }
}
