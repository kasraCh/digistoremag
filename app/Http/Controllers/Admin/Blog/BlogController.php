<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Requests\Admin\Blog\ArticleStoreRequest;
use App\Http\Requests\Admin\Blog\ArticleEditRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\media;
use Illuminate\Http\Request;

class BlogController
{
    public function index()
    {
        $categories = Category::all();

        return view('adminPage.blog.blog-store', compact('categories'));
    }

    public function store(ArticleStoreRequest $request)
    {
        $article = $request->validated();

        unset($article['picture']);

        $data = [
            'user_id' => auth()->id(),
        ];

        if ($request->hasFile('picture')) {

            $file = $request->file('picture');
            
            $fileExtension = strtolower($file->getClientOriginalExtension());

            $allowedFileExtension = ['jpg', 'jpeg', 'png', 'gif', 'svg'];

            if (in_array($fileExtension, $allowedFileExtension)) {
                $newFileName = md5(time() . $file->getClientOriginalName()) . '.' . $fileExtension;

                $file->move(public_path('admin-page/assets/upload/pictures'), $newFileName);

                $data['picture'] = $newFileName;

                Article::create(array_merge($article, $data));

                return redirect()->back()->with('success', 'مقاله با موفقیت ساخته شد');
            } else {
                Article::create(array_merge($article, $data));

                return redirect()->back()->with('success-pic', '(مقاله فاقد عکس می‌باشد!) مقاله با موفقیت ساخته شد');
            }
        }

        Article::create(array_merge($article, $data));
        return redirect()->back()->with('success-pic', '(بدون عکس) مقاله با موفقیت ساخته شد');
    }


    public function editView($id)
    {
        $article = Article::find($id);

        $categories = Category::all();

        return view('adminPage.blog.article_edit', compact('article', 'categories'));
    }

    public function edit(ArticleEditRequest $request, $id)
    {
        $data = Article::findOrFail($id);

        $data->title = $request->title;
        $data->content = $request->content;
        $data->category_id = $request->category_id;

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');

            $fileExtension = $file->getClientOriginalExtension();
            $newFileName = md5(time() . $file->getClientOriginalName()) . '.' . $fileExtension;

            $allowedFileExtension = ['jpg', 'jpeg', 'png', 'gif', 'svg'];

            if (in_array(strtolower($fileExtension), $allowedFileExtension)) {
                $file->move(public_path('admin-page/assets/upload/pictures'), $newFileName);

                $data->picture = $newFileName;
            }
        }

        $data->save();

        return to_route('admin.view.blogs');
    }

    
    public function delete($id)
    {
        Article::findOrFail($id)->delete();

        return to_route('admin.view.blogs');
    }
}