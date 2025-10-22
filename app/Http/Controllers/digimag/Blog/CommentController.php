<?php

namespace App\Http\Controllers\digimag\Blog;

use App\Http\Requests\digimag\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController
{
    public function index(CommentRequest $request, $id)
    {        
        $data = $request->validated();

        Comment::create(array_merge($data,[
            'article_id' => $id,
            'user_id' => auth()->id()
        ]));

        return redirect()->back()->with('success', 'دیدگاه با موفقیت ثبت شد');
    }
}
