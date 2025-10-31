@extends('admin.base.base')



@section('content')
    <div class="container">

        <table class="table">
            <tr>
                <th>ایدی دسته بندی</th>
                <th>نام دسته بندی</th>
                <th>حذف</th>
            </tr>
            @foreach ($categories as $category)
                <tr>
                    <td>
                        {{ $category->id }}
                    </td>
                    <td>
                        {{ $category->category }}
                    </td>
                    <td>
                        <a href="{{ route('admin.category.delete', ['id' => $category->id]) }}"
                            class="btn btn-outline-danger">حذف</a>
                    </td>
                </tr>
            @endforeach
        </table>

        <form action="{{ route('admin.category.store') }}" method="POST" class="form-group">
            @csrf
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">نام دسته بندی جدید</label>
                </div>
                <div class="col-auto">
                    <input type="text" placeholder="نام دسته بندی..." name="category" id="inputPassword6"
                        class="form-control" value="{{ old('category') }}" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                        دسته بندی نباید تکراری باشد ، ابتدا از جدول بالا موجودیت ان را چک کنید .
                    </span>
                </div>
            </div>
            <button class="btn btn-outline-warning my-2">ساختن</button>
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
