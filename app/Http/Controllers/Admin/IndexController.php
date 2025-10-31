<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\base\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('adminPage.index');
    }
}
