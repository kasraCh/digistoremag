@extends('adminPage.base.base')
@section('vendors-css')
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/typeahead-js/typeahead.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/sweetalert2/sweetalert2.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}">
@endsection



@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4">
            {{-- <span class="text-muted fw-light">کاربر / نمایش /</span> امنیت --}}
            <span>تغیر اطلاعات کاربری</span>
        </h4>
        <div class="row gy-4">
            <!-- User Sidebar -->
            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                <!-- User Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="user-avatar-section">
                            <div class="d-flex align-items-center flex-column">
                                {{-- <img class="img-fluid rounded my-4"
                                    src="{{ asset('admin-page/assets/img/avatars/10.png') }}" height="110" width="110"
                                    alt="User avatar"> --}}
                                <div class="user-info text-center">
                                    <h5 class="mb-2">{{ auth()->user()->name }} {{ auth()->user()->family }}</h5>
                                    <span class="badge bg-label-secondary">نویسنده</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around flex-wrap my-4 py-3">
                            <div class="d-flex align-items-center me-4 mt-3 gap-3">
                                <span class="badge bg-label-primary p-2 rounded mt-1"><i
                                        class="bx bx-check bx-sm"></i></span>
                                <div>
                                    <h5 class="mb-0">{{ $blogs->count() }}</h5>
                                    <span>تعداد مقاله های منتشر شده</span>
                                </div>
                            </div>

                        </div>
                        <h5 class="pb-2 border-bottom mb-4 secondary-font">جزئیات</h5>
                        <div class="info-container">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <span class="fw-bold me-2">نام کاربری:</span>
                                    <span>{{ auth()->user()->name }} {{ auth()->user()->family }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">ایمیل:</span>
                                    <span>{{ auth()->user()->email }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">ایدی کاربری:</span>
                                    <span>{{ auth()->user()->id }}</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">تاریخ عضویت:</span>
                                    <span>{{ \Morilog\Jalali\CalendarUtils::strftime('Y/m/d H:i:s', strtotime(auth()->user()->created_at)) }}</span>
                                </li>
                            </ul>
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger my-3">
                                    <ul>
                                        <li>
                                            {{ $error }}
                                        </li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
            <!--/ User Sidebar -->

            <!-- User Content -->
            <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                <!-- User Pills -->
                <ul class="nav nav-pills flex-column flex-md-row mb-3">

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.view.blogs') }}"><i class="bx bx-user me-1"></i>حساب</a>
                    </li> --}}

                    <li class="nav-item">
                        <a class="nav-link active my-1 my-md-0" href="{{ route('admin.user.security.view') }}"><i
                                class="bx bx-lock-alt me-1"></i>امنیت</a>
                    </li>

                </ul>
                <!--/ User Pills -->

                <!-- Change Password -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">تغییر رمز عبور</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.user.security.action') }}" method="POST">
                            @csrf
                            <div class="alert alert-warning" role="alert">
                                <h6 class="alert-heading mb-1">از رعایت الزامات زیر اطمینان حاصل کنید</h6>
                                <span>حداقل 8 کاراکتر، حروف بزرگ و نمادها</span>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-sm-6 form-password-toggle">
                                    <label class="form-label" for="newPassword">رمز عبور جدید</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control text-start" type="password" dir="ltr"
                                            id="newPassword" name="newPassword" placeholder="············">
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>

                                <div class="mb-3 col-12 col-sm-6 form-password-toggle">
                                    <label class="form-label" for="confirmPassword">تایید رمز عبور جدید</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control text-start" type="password" dir="ltr"
                                            name="confirmPassword" id="confirmPassword" placeholder="············">
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary me-2">تغییر رمز عبور</button>
                                </div>
                            </div>
                        </form>
                        <div>
                            @if (Session::has('password-success'))
                                <div class="w3-panel w3-green my-3 rounded text-light" role="alert">
                                    {{ Session::get('password-success') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!--/ Change Password -->

                <!-- change name -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0">تغییر نام کاربری</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.user.edit.name') }}" method="POST">
                            @csrf
                            <div class="alert alert-warning" role="alert">
                                <h6 class="alert-heading mb-1"> نام و نام خانوادگی <span class="text-danger">واقعی</span>
                                    خود را وارد کنید</h6>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-sm-6 form-password-toggle">
                                    <label class="form-label" for="name">نام</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control text-start" type="password" dir="ltr"
                                            id="name" name="name" placeholder="نام">
                                    </div>
                                </div>

                                <div class="mb-3 col-12 col-sm-6 form-password-toggle">
                                    <label class="form-label" for="family">نام خانوادگی</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control text-start" type="text" dir="ltr"
                                            name="family" id="family" placeholder="نام خانوادگی">
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary me-2"> تغییر اطلاعات کاربری </button>
                                </div>
                        </form>
                        <div>
                            @if (Session::has('info-success'))
                                <div class="w3-panel w3-green bg-success rounded my-3 text-light" role="alert">
                                    {{ Session::get('info-success') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!--/ change name -->

            <!--/ User Content -->
        </div>

        <!-- Modals -->
        <!-- Edit User Modal -->
        <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4 mt-0 mt-md-n2">
                            <h3 class="secondary-font">ویرایش اطلاعات کاربر</h3>
                            <p>به‌روزرسانی اطلاعات کاربر یک بررسی حریم خصوصی دریافت می کند.</p>
                        </div>
                        <form id="editUserForm" class="row g-3" onsubmit="return false">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserFirstName">نام</label>
                                <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                                    class="form-control" placeholder="جان">
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserLastName">نام خانوادگی</label>
                                <input type="text" id="modalEditUserLastName" name="modalEditUserLastName"
                                    class="form-control" placeholder="اسنو">
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="modalEditUserName">نام کاربری</label>
                                <input type="text" id="modalEditUserName" name="modalEditUserName"
                                    class="form-control text-start" placeholder="john.doe.007" dir="ltr">
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserEmail">ایمیل</label>
                                <input type="text" id="modalEditUserEmail" name="modalEditUserEmail"
                                    class="form-control text-start" placeholder="example@domain.com" dir="ltr">
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserStatus">وضعیت</label>
                                <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select"
                                    aria-label="Default select example">
                                    <option selected>وضعیت</option>
                                    <option value="1">فعال</option>
                                    <option value="2">غیرفعال</option>
                                    <option value="3">معلق</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTaxID">شناسه مالیاتی</label>
                                <input type="text" id="modalEditTaxID" name="modalEditTaxID"
                                    class="form-control modal-edit-tax-id" placeholder="123 456 7890">
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserPhone">شماره تلفن</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="modalEditUserPhone" name="modalEditUserPhone"
                                        class="form-control phone-number-mask text-start" placeholder="202 555 0111"
                                        dir="ltr">
                                    <span class="input-group-text" dir="ltr">+98</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserLanguage">زبان</label>
                                <select id="modalEditUserLanguage" name="modalEditUserLanguage"
                                    class="select2 form-select" multiple>
                                    <option value="">انتخاب</option>
                                    <option value="english" selected>انگلیسی</option>
                                    <option value="spanish">اسپانیایی</option>
                                    <option value="french">فرانسوی</option>
                                    <option value="german">آلمانی</option>
                                    <option value="dutch">هلندی</option>
                                    <option value="hebrew">عبری</option>
                                    <option value="sanskrit">سانسکریت</option>
                                    <option value="hindi">هندی</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserCountry">کشور</label>
                                <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select"
                                    data-allow-clear="true">
                                    <option value="">انتخاب</option>
                                    <option value="Australia">استرالیا</option>
                                    <option value="Bangladesh">بنگلادش</option>
                                    <option value="Belarus">بلاروس</option>
                                    <option value="Brazil">برزیل</option>
                                    <option value="Canada">کانادا</option>
                                    <option value="China">چین</option>
                                    <option value="France">فرانسه</option>
                                    <option value="Germany">آلمان</option>
                                    <option value="India">هندوستان</option>
                                    <option value="Indonesia">اندونزی</option>
                                    <option value="Israel">اسرائیل</option>
                                    <option value="Italy">ایتالیا</option>
                                    <option value="Japan">ژاپن</option>
                                    <option value="Korea">کره جنوبی</option>
                                    <option value="Mexico">مکزیک</option>
                                    <option value="Philippines">فیلیپین</option>
                                    <option value="Russia">روسیه</option>
                                    <option value="South Africa">آفریقای جنوبی</option>
                                    <option value="Thailand">تایلند</option>
                                    <option value="Turkey">ترکیه</option>
                                    <option value="Ukraine">اوکراین</option>
                                    <option value="United Arab Emirates">امارات</option>
                                    <option value="United Kingdom">انگلستان</option>
                                    <option value="United States">ایالات متحده</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="switch">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                    <span class="switch-label">استفاده به عنوان آدرس صورتحساب؟</span>
                                </label>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    انصراف
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Edit User Modal -->

        <!-- Enable OTP Modal -->
        <div class="modal fade" id="enableOTP" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4 mt-0 mt-md-n2">
                            <h3 class="mb-4 secondary-font">فعال کردن رمز عبور یکبار مصرف</h3>
                        </div>
                        <h6>شماره موبایل خود را برای دریافت پیامک تایید کنید</h6>
                        <p>شماره موبایل خود را به همراه کد کشور وارد کنید و ما یک کد تایید برای شما ارسال خواهیم کرد.</p>
                        <form id="enableOTPForm" class="row g-3 mt-3" onsubmit="return false">
                            <div class="col-12">
                                <label class="form-label" for="modalEnableOTPPhone">شماره تلفن</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="modalEnableOTPPhone" name="modalEnableOTPPhone"
                                        class="form-control phone-number-otp-mask text-start" placeholder="202 555 0111"
                                        dir="ltr">
                                    <span class="input-group-text" dir="ltr">+98</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    انصراف
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Enable OTP Modal -->

        <!-- Add New Credit Card Modal -->
        <div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4 mt-0 mt-md-n2">
                            <h3 class="secondary-font">ارتقای پلن</h3>
                            <p>بهترین پلن برای کاربر را انتخاب کنید.</p>
                        </div>
                        <form id="upgradePlanForm" class="row g-3" onsubmit="return false">
                            <div class="col-sm-9">
                                <label class="form-label" for="choosePlan">انتخاب پلن</label>
                                <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
                                    <option selected>انتخاب پلن</option>
                                    <option value="standard">استاندارد - 99,000 تومان ماهانه</option>
                                    <option value="exclusive">اختصاصی - 249,000 تومان ماهانه</option>
                                    <option value="Enterprise">سازمانی - 499,000 تومان ماهانه</option>
                                </select>
                            </div>
                            <div class="col-sm-3 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary w-100">ارتقا</button>
                            </div>
                        </form>
                    </div>
                    <hr class="mx-md-n5 mx-n3">
                    <div class="modal-body">
                        <h6 class="mb-0">پلن کنونی کاربر پلن استاندارد است</h6>
                        <div class="d-flex justify-content-between align-items-center flex-wrap mb-md-n2">
                            <div class="d-flex justify-content-center align-items-center me-2 mt-2">
                                <sup class="h5 pricing-currency fw-normal pt-2 mt-4 mb-0 me-1 text-primary">هزار
                                    تومان</sup>
                                <h1 class="fw-normal display-1 mb-0 text-primary">99</h1>
                                <sub class="h5 pricing-duration mt-auto mb-3">/ ماهانه</sub>
                            </div>
                            <button class="btn btn-label-danger cancel-subscription mt-3">لغو اشتراک</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Add New Credit Card Modal -->

        <!-- /Modals -->
    </div>
@endsection

@section('vendors-script')
    <!-- Vendors JS -->
    <script src="{{ asset('admin-page/assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/select2/i18n/fa.js') }}"></script>
    <script src="{{ asset('/admin-page/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('admin-page/assets/js/modal-edit-user.js') }}"></script>
    <script src="{{ asset('admin-page/assets/js/modal-enable-otp.js') }}"></script>
    <script src="{{ asset('admin-page/assets/js/app-user-view.js') }}"></script>
    <script src="{{ asset('admin-page/assets/js/app-user-view-security.js') }}"></script>
@endsection
