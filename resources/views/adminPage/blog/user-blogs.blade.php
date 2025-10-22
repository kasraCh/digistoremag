@extends('adminPage.base.base')

@section('vendors-css')
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/typeahead-js/typeahead.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin-page/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/sweetalert2/sweetalert2.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/select2/select2.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin-page/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}">
@endsection



@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4">
            بلاگ های های منتشر شده توسط {{ auth()->user()->name }} :
        </h4>
        <div class="row gy-4">

            <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.view.blogs') }}"><i
                                class="bx bx-user me-1"></i>مقاله ها</a>
                    </li>
                </ul>

                <div class="row">

                    @foreach ($articles as $article)
                        @if ($article->user_id == auth()->user()->id)
                            <div class="col-md-6 col-sm-10">
                                <div class="card mb-4 ">
                                    <div class="card-body w-auto">
                                        <ul class="timeline">
                                            <li class="timeline-item timeline-item-transparent">
                                                <span class="timeline-point timeline-point-danger"></span>
                                                <div class="timeline-event">
                                                    <div class="timeline-header mb-1">

                                                        <h6 class="mb-0 mt-n1">عنوان مقاله : {{ $article->title }}

                                                            <p class="my-2"> نویسنده: {{ $article->user->name }} </p>

                                                            <p> دسته بندی : {{ $article->category->category }}</p>

                                                            <img class="rounded" style="width: 45px; height: 45px;"
                                                                src="{{ asset('admin-page/assets/upload/pictures/' . $article->picture) }}"
                                                                alt="article picture">

                                                        </h6>

                                                    </div>
                                                </div>
                                            </li>
                                            <div class="container">
                                                <a class="btn btn-outline-warning text-warning"
                                                    href="{{ route('admin.article.edit.view', ['id' => $article->id]) }}">ویرایش</a>
                                                <a href="{{ route('admin.article.delete', ['id' => $article->id]) }}"
                                                    class="btn btn-outline-danger my-2 mx-2">حذف</a>
                                                <small>
                                                    <p>
                                                        ساخته شده در :
                                                        {{ \Morilog\Jalali\CalendarUtils::strftime('Y/m/d H:i:s', strtotime($article->created_at)) }}
                                                    </p>
                                                </small>

                                                <small>
                                                    <p>
                                                        آخرین به روز رسانی :
                                                        {{ \Morilog\Jalali\CalendarUtils::strftime('Y/m/d H:i:s', strtotime($article->updated_at)) }}
                                                    </p>
                                                </small>
                                            </div>
                                            <hr>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>
        </div>

    </div>
@endsection

@section('vendors-script')
    <!-- Vendors JS -->
    <script src="{{ asset('admin-page/assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/datatables-bs5/i18n/fa.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/select2/i18n/fa.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('admin-page/assets/js/modal-edit-user.js') }}"></script>
    <script src="{{ asset('admin-page/assets/js/app-user-view.js') }}"></script>
    <script src="{{ asset('admin-page/assets/js/app-user-view-account.js') }}"></script>
@endsection
