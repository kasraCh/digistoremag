@extends('admin.base.base')

@section('vendors-css')
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/typeahead-js/typeahead.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin-page/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin-page/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}">
@endsection



@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">پروفایل کاربر /</span> پروفایل
        </h4>

        <!-- Header -->
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="user-profile-header-banner">
                        <img src="{{ asset('admin-page/assets/img/pages/profile-banner.png') }}" alt="Banner image"
                            class="rounded-top w-100">
                    </div>
                    <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                            <img src="{{ asset('admin-page/assets/img/avatars/1.png') }}" alt="user image"
                                class="d-block h-auto ms-0 ms-sm-4 rounded-3 user-profile-img my-3">
                        </div>
                        <div class="flex-grow-1 mt-3 mt-sm-5">
                            <div
                                class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                                <div class="user-profile-info">
                                    <h4>{{ auth()->user()->name }} {{ auth()->user()->family }}</h4>
                                    <ul
                                        class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                        <li class="list-inline-item fw-semibold"><i class="bx bx-pen"></i> طراح UX</li>
                                        <li class="list-inline-item fw-semibold"><i class="bx bx-map"></i> شهر تبریز</li>
                                        <li class="list-inline-item fw-semibold">
                                            <i class="bx bx-calendar-alt"></i> عضویت در فروردین
                                            {{ auth()->user()->created_at }}
                                        </li>
                                    </ul>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-primary text-nowrap">
                                    <i class="bx bx-user-check me-1"></i>متصل
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Header -->

        <!-- Navbar pills -->
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-sm-row mb-4">
                    <li class="nav-item">
                        <a class="nav-link active my-1 my-md-0" href="{{ route('admin.user.profile') }}"><i
                                class="bx bx-user me-1"></i> پروفایل</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="pages-profile-projects.html"><i class="bx bx-grid-alt me-1"></i>
                            پروژه‌ها</a>
                    </li>

                </ul>
            </div>
        </div>
        <!--/ Navbar pills -->

        <!-- User Profile Content -->
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-5">
                <!-- About User -->
                <div class="card mb-4">
                    <div class="card-body">
                        <small class="text-muted text-uppercase">درباره</small>
                        <ul class="list-unstyled mb-4 mt-3">
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bx-user"></i><span class="fw-semibold mx-2">نام کامل:</span>
                                <span>{{ auth()->user()->name }} {{ auth()->user()->family }}</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bx-check"></i><span class="fw-semibold mx-2">وضعیت:</span> <span>فعال</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bx-star"></i><span class="fw-semibold mx-2">نقش:</span> <span>توسعه
                                    دهنده</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bx-flag"></i><span class="fw-semibold mx-2">کشور:</span> <span>ایران</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bx-detail"></i><span class="fw-semibold mx-2">زبان‌ها:</span>
                                <span>انگلیسی</span>
                            </li>
                        </ul>
                        <small class="text-muted text-uppercase">تماس</small>
                        <ul class="list-unstyled mb-4 mt-3">
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bx-phone"></i><span class="fw-semibold mx-2">تماس:</span>
                                <span class="d-inline-block" dir="ltr">(123) 456-7890</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bx-chat"></i><span class="fw-semibold mx-2">تلگرام:</span>
                                <span>john.doe</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bx-envelope"></i><span class="fw-semibold mx-2">ایمیل:</span>
                                <span>{{ auth()->user()->email }} </span>
                            </li>
                        </ul>
                        <small class="text-muted text-uppercase">تیم‌ها</small>
                        <ul class="list-unstyled mt-3 mb-0">
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bxl-github text-primary me-2"></i>
                                <div class="d-flex flex-wrap">
                                    <span class="fw-semibold me-2">توسعه دهنده پنل مدیریت</span><span>(126 عضو)</span>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bx bxl-react text-info me-2"></i>
                                <div class="d-flex flex-wrap">
                                    <span class="fw-semibold me-2">توسعه دهنده React</span><span>(98 عضو)</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/ About User -->
                <!-- Profile Overview -->
                <div class="card mb-4">
                    <div class="card-body">
                        <small class="text-muted text-uppercase">نمای کلی</small>
                        <ul class="list-unstyled mt-3 mb-0">
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bx-check"></i><span class="fw-semibold mx-2">وظیفه تدوین شده:</span>
                                <span>13.5k</span>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bx bx-customize"></i><span class="fw-semibold mx-2">پروژه تدوین شده:</span>
                                <span>146</span>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bx bx-user"></i><span class="fw-semibold mx-2">اتصالات:</span> <span>897</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/ Profile Overview -->
            </div>
            <div class="col-xl-8 col-lg-7 col-md-7">
                <!-- Activity Timeline -->
                <div class="card card-action mb-4">
                    <div class="card-header align-items-center">
                        <h5 class="card-action-title mb-3"><i class="bx bx-list-ul bx-sm me-2"></i>خط زمانی فعالیت</h5>
                        <div class="card-action-element btn-pinned">
                            <div class="dropdown">
                                <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="javascript:void(0);">اشتراک گذاری خط زمانی</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">پیشنهاد ویرایش</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">گزارش خطا</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="timeline ms-2">
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-warning"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0 mt-n1">ملاقات با مشتری</h6>
                                        <small class="text-muted mt-1 mt-sm-0 mb-1 mb-sm-0">امروز</small>
                                    </div>
                                    <p class="mb-2">ملاقات برای پروژه با استیو در 10:15 ق.ظ</p>
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="avatar me-3 mt-1">
                                            <img src="{{ asset('admin-page/assets/img/avatars/3.png') }}" alt="آواتار"
                                                class="rounded-circle">
                                        </div>
                                        <div>
                                            <h6 class="mb-1">بیل گیتس (مشتری)</h6>
                                            <span>بنیان‌گذار مایکروسافت</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-info"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0 mt-n1">ایجاد یک پروژه جدید برای مشتری</h6>
                                        <small class="text-muted mt-1 mt-sm-0 mb-1 mb-sm-0">2 روز قبل</small>
                                    </div>
                                    <p class="mb-0">لورم ایپسوم متن ساختگی با تولید</p>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-primary"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0 mt-n1">لورم ایپسوم متن ساختگی با تولید</h6>
                                        <small class="text-muted mt-1 mt-sm-0 mb-1 mb-sm-0">6 روز قبل</small>
                                    </div>
                                    <p class="mb-2">
                                        ارسال شده از طرف تونی استارک
                                        <img src="{{ asset('admin-page/assets/img/avatars/4.png') }}"
                                            class="rounded-circle ms-3" alt="آواتار" height="20" width="20">
                                    </p>
                                    <div class="d-flex flex-wrap gap-2">
                                        <a href="javascript:void(0)" class="me-3">
                                            <img src="{{ asset('admin-page/assets/img/icons/misc/pdf.png') }}"
                                                alt="Document image" width="20" class="me-2">
                                            <span class="h6">راهنمای برنامه</span>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <img src="{{ asset('admin-page/assets/img/icons/misc/doc.png') }}"
                                                alt="Excel image" width="20" class="me-2">
                                            <span class="h6">نتایج بررسی‌ها</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-success"></span>
                                <div class="timeline-event pb-0">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0 mt-n1">لورم ایپسوم متن ساختگی</h6>
                                        <small class="text-muted mt-1 mt-sm-0 mb-1 mb-sm-0">10 روز قبل</small>
                                    </div>
                                    <p class="mb-0">لورم ایپسوم متن ساختگی با تولید</p>
                                </div>
                            </li>
                            <li class="timeline-end-indicator">
                                <i class="bx bx-check-circle"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/ Activity Timeline -->
                <div class="row">
                    <!-- Connections -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card card-action mb-4">
                            <div class="card-header align-items-center">
                                <h5 class="card-action-title mb-0">اتصالات</h5>
                                <div class="card-action-element btn-pinned">
                                    <div class="dropdown">
                                        <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="javascript:void(0);">اشتراک گذاری
                                                    اتصالات</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">پیشنهاد ویرایش</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">گزارش خطا</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-3">
                                                    <img src="{{ asset('admin-page/assets/img/avatars/2.png') }}"
                                                        alt="آواتار" class="rounded-circle">
                                                </div>
                                                <div class="me-2">
                                                    <h6 class="mb-0">استیو راجرز</h6>
                                                    <small class="text-muted">45 اتصال</small>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <button class="mt-1 btn btn-label-primary p-1 btn-sm"><i
                                                        class="bx bx-user"></i></button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-3">
                                                    <img src="{{ asset('admin-page/assets/img/avatars/3.png') }}"
                                                        alt="آواتار" class="rounded-circle">
                                                </div>
                                                <div class="me-2">
                                                    <h6 class="mb-0">اولیور کوئین</h6>
                                                    <small class="text-muted">1.32k اتصال</small>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <button class="mt-1 btn btn-primary p-1 btn-sm"><i
                                                        class="bx bx-user"></i></button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-3">
                                                    <img src="{{ asset('admin-page/assets/img/avatars/10.png') }}"
                                                        alt="آواتار" class="rounded-circle">
                                                </div>
                                                <div class="me-2">
                                                    <h6 class="mb-0">امیلیا کلارک</h6>
                                                    <small class="text-muted">125 اتصال</small>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <button class="mt-1 btn btn-primary p-1 btn-sm"><i
                                                        class="bx bx-user"></i></button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-3">
                                                    <img src="{{ asset('admin-page/assets/img/avatars/7.png') }}"
                                                        alt="آواتار" class="rounded-circle">
                                                </div>
                                                <div class="me-2">
                                                    <h6 class="mb-0">بیل گیتس</h6>
                                                    <small class="text-muted">456 اتصال</small>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <button class="mt-1 btn btn-label-primary p-1 btn-sm"><i
                                                        class="bx bx-user"></i></button>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-3">
                                                    <img src="{{ asset('admin-page/assets/img/avatars/12.png') }}"
                                                        alt="آواتار" class="rounded-circle">
                                                </div>
                                                <div class="me-2">
                                                    <h6 class="mb-0">دیوید بکهام</h6>
                                                    <small class="text-muted">1.2k اتصال</small>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <button class="mt-1 btn btn-label-primary p-1 btn-sm"><i
                                                        class="bx bx-user"></i></button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="text-center">
                                        <a href="javascript:;">مشاهده همه اتصالات</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/ Connections -->
                    <!-- Teams -->
                    <div class="col-lg-12 col-xl-6">
                        <div class="card card-action mb-4">
                            <div class="card-header align-items-center">
                                <h5 class="card-action-title mb-0">تیم‌ها</h5>
                                <div class="card-action-element btn-pinned">
                                    <div class="dropdown">
                                        <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="javascript:void(0);">اشتراک گذاری
                                                    تیم‌ها</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">پیشنهاد ویرایش</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">گزارش خطا</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-3">
                                                    <img src="{{ asset('admin-page/assets/img/icons/brands/react-label.png') }}"
                                                        alt="آواتار" class="rounded-circle">
                                                </div>
                                                <div class="me-2">
                                                    <h6 class="mb-0">توسعه دهندگان React</h6>
                                                    <small class="text-muted">72 عضو</small>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:;"><span class="mt-1 badge bg-label-danger">توسعه
                                                        دهنده</span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-3">
                                                    <img src="{{ asset('admin-page/assets/img/icons/brands/support-label.png') }}"
                                                        alt="آواتار" class="rounded-circle">
                                                </div>
                                                <div class="me-2">
                                                    <h6 class="mb-0">تیم پشتیبانی</h6>
                                                    <small class="text-muted">122 عضو</small>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:;"><span
                                                        class="mt-1 badge bg-label-primary">پشتیبانی</span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-3">
                                                    <img src="{{ asset('admin-page/assets/img/icons/brands/figma-label.png') }}"
                                                        alt="آواتار" class="rounded-circle">
                                                </div>
                                                <div class="me-2">
                                                    <h6 class="mb-0">طراحان UI</h6>
                                                    <small class="text-muted">7 عضو</small>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:;"><span
                                                        class="mt-1 badge bg-label-info">طراح</span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-3">
                                                    <img src="{{ asset('admin-page/assets/img/icons/brands/vue-label.png') }}"
                                                        alt="آواتار" class="rounded-circle">
                                                </div>
                                                <div class="me-2">
                                                    <h6 class="mb-0">توسعه دهندگان Vue.js</h6>
                                                    <small class="text-muted">289 عضو</small>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:;"><span class="mt-1 badge bg-label-danger">توسعه
                                                        دهنده</span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-3">
                                                    <img src="{{ asset('admin-page/assets/img/icons/brands/twitter-label.png') }}"
                                                        alt="آواتار" class="rounded-circle">
                                                </div>
                                                <div class="me-w">
                                                    <h6 class="mb-0">بازاریابی دیجیتال</h6>
                                                    <small class="text-muted">24 عضو</small>
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:;"><span
                                                        class="mt-1 badge bg-label-secondary">بازاریابی</span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="text-center">
                                        <a href="javascript:;">مشاهده همه تیم‌ها</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/ Teams -->
                </div>
                <!-- Projects table -->
                <div class="card">
                    <div class="card-datatable table-responsive">
                        <table class="datatables-projects border-top table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>نام</th>
                                    <th>رهبر</th>
                                    <th>تیم</th>
                                    <th class="w-px-200">وضعیت</th>
                                    <th>عمل</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <!--/ Projects table -->
            </div>
        </div>
        <!--/ User Profile Content -->
    </div>
@endsection

@section('vendors-script')
    <!-- Vendors JS -->
    <script src="{{ asset('admin-page/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/datatables-bs5/i18n/fa.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('admin-page/assets/js/pages-profile.js') }}"></script>
@endsection
