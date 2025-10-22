<?php

namespace App\Http\Controllers\AdminPage\Category;

use App\Http\Requests\AdminPage\Category\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController
{
    public function index()
    {
        $categories = Category::all();

        return view('adminPage.category.index', compact('categories'));
    }

    public function store(CategoryStoreRequest $request)
    {
        $data = $request->validated();

        Category::create($data);

        return to_route('admin.category.view');
    }

    public function dellete($id)
    {
        Category::find($id)->delete();

        return to_route('admin.category.view');
    }
}
