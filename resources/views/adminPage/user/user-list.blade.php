@extends('adminPage.base.base')

@section('vendors-css')
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/typeahead-js/typeahead.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin-page/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/select2/select2.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin-page/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}">
@endsection



@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-4 mb-4">
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <div class="d-flex align-items-baseline mt-2">
                                    <h4 class="mb-0 me-2">{{ $users->count() }}</h4>
                                </div>
                                <small>مجموع کاربران</small>
                            </div>
                            <span class="badge bg-label-primary rounded p-2">
                                <i class="bx bx-user bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <div class="d-flex align-items-baseline mt-2">
                                    <h4 class="mb-0 me-2">{{ count($adminRole) }}</h4>
                                </div>
                                <small>مدیران وبسایت </small>
                            </div>
                            <span class="badge bg-label-danger rounded p-2">
                                <i class="bx bx-user-plus bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container my-5">

                <form class="input-group my-5" action="{{ route('admin.user.list.search') }}" method="GET">

                    <input class="form-control rounded" placeholder="جستجو بر اساس نام کاربر یا ایمیل کاربر..."
                        type="search" name="search">

                    <button class="btn btn-outline-primary" type="submit">جستجو</button>

                </form>


                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> ایدی کاربر</th>
                            <th>نام</th>
                            <th>نام خانوادگی</th>
                            <th>ایمیل</th>
                            <th>تاریخ عضویت</th>
                            <th>تعیین سطح دسترسی به پنل ادمین</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            @if ($user->id != auth()->user()->id)
                                <tr>
                                    <th>{{ $user->id }}</th>
                                    <th>{{ $user->name }}</th>
                                    <th>{{ $user->family }}</th>
                                    <th>{{ $user->email }}</th>
                                    <th>{{ \Morilog\Jalali\CalendarUtils::strftime('Y/m/d H:i:s', strtotime($user->created_at)) }}
                                    </th>
                                    <th>
                                        @if (in_array($user->email, $adminRole))
                                            <a href="{{ route('admin.user.delete.permission', ['user_id' => $user->id]) }}"
                                                class="btn btn-outline-success btn-sm">حذف دسترسی به پنل ادمین</a>
                                        @else
                                            <a class="btn - btn-outline-danger  btn-sm"
                                                href="{{ route('admin.user.get.permission', ['email' => $user->email, 'user_id' => $user->id]) }}">
                                                دسترسی به
                                                پنل
                                                ادمین</a>
                                        @endif
                                    </th>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection

    @section('vendors-script')
        <!-- Vendors JS -->
        <script src="{{ asset('admin-page/assets/vendor/libs/moment/moment.js') }}"></script>
        <script src="{{ asset('admin-page/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
        <script src="{{ asset('admin-page/assets/vendor/libs/datatables-bs5/i18n/fa.js') }}"></script>
        <script src="{{ asset('admin-page/assets/vendor/libs/select2/select2.js') }}"></script>
        <script src="{{ asset('admin-page/assets/vendor/libs/select2/i18n/fa.js') }}"></script>
        <script src="{{ asset('admin-page/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
        <script src="{{ asset('admin-page/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
        <script src="{{ asset('admin-page/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
        <script src="{{ asset('admin-page/assets/vendor/libs/cleavejs/cleave.js') }}"></script>
        <script src="{{ asset('admin-page/assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>


        <!-- Page JS -->
        <script src="{{ asset('admin-page/assets/js/app-user-list.js') }}"></script>
    @endsection
