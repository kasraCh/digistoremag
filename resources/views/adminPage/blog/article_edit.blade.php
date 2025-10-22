@extends('adminPage.base.base')
@section('vendors-css')
    <style>
        .label:hover {
            color: cyan;
            transition: 0.7s;
            cursor: pointer
        }
    </style>
@endsection



@section('content')
    <div class="container">
        <h2>ایجاد مقاله جدید</h2>

        <form action="{{ route('admin.article.edit.action', ['id' => $article->id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="title">عنوان مقاله</label>
                <input type="text" id="title" name="title" value="{{ $article->title }}" class="form-control">
            </div>

            <hr>
            <span class="text-danger">
                <small>عکس مقاله را دوباره بارگزاری کنید !!!</small>
            </span>
            <div class="form-group mb-3 my-2">
                <label for="image" class="label">رو من کلیک کنید و عکس مقاله را انتخاب کنید</label>
                <input type="file" id="image" value="{{ $article->picture }}" name="picture" class="form-control"
                    accept="image/*" style="display:none;">
            </div>

            <div class="form-group mb-3">
                <label for="content">متن مقاله</label>
                <textarea id="editor" name="content" rows="10" class="form-control">{{ $article->content }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="category">دسته بندی را انتخاب کنید</label>
                <select name="category_id" class="form-select w-25 my-3" id="category">
                    @foreach ($categories as $category)
                        @if ($category->id == $article->category_id)
                            <option selected value="{{ $category->id }}">{{ $category->category }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-outline-warning">ویرایش</button>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger w-50">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection

@section('vendors-script')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                language: 'fa',
                toolbar: [
                    'undo', 'redo', '|',
                    'heading', '|',
                    'bold', 'italic', 'underline', '|',
                    'link', 'blockQuote', 'insertTable', '|',
                    'bulletedList', 'numberedList', '|',
                    'alignment', '|',
                    'codeBlock'
                ]
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
