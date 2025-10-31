@extends('admin.base.base')
@push('dropify-css-stack')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
@endpush
@section('vendors-css')
    <style>
        .label:hover {
            color: cyan;
            transition: 0.5s;
            cursor: pointer;
            font-size: 18px;
            text-shadow: 5px 5px 10px
        }

        .label:active {
            transition: 0.1s;
            color: red;
            opacity: 0.8;
        }
    </style>
@endsection



@section('content')
    <div class="container">
        <h2>ایجاد مقاله جدید</h2>

        <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="title">عنوان مقاله</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <hr>
            <div class="form-group mb-3">
                <label for="image" class="label">رو من کلیک کنید و عکس مقاله را انتخاب کنید</label>
                <input type="file" id="image" name="picture" class="form-control dropify" accept="image/*"
                    style="display:none;" data-height="250" data-max-file-size="2M">
            </div>

            <div class="form-group mb-3">
                <label for="content">متن مقاله</label>
                <textarea id="editor" name="content" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="category">دسته بندی را انتخاب کنید</label>
                <select name="category_id" class="form-select w-25 my-3" id="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">انتشار</button>
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
        <div class="container">
            @if (Session::has('error'))
                <div class="w3-panel w3-red my-3 text-danger" role="alert">
                    <ul>
                        <li class="">
                            {{ Session::get('error') }}
                        </li>
                    </ul>
                </div>
            @endif
            @if (Session::has('success'))
                <div class="w3-panel w3-red my-3" role="alert">
                    <ul>
                        <li class="">
                            {{ Session::get('success') }}
                        </li>
                    </ul>
                </div>
            @endif
            @if (Session::has('success-pic'))
                <div class="w3-panel w3-red my-3 text-warning" role="alert">
                    <ul>
                        <li class="">
                            {{ Session::get('success-pic') }}
                        </li>
                    </ul>
                </div>
            @endif
        </div>
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

@push('dropify-stack')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script>
        $('.dropify').dropify();
    </script>
@endpush
