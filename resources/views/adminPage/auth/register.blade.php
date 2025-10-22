@extends('adminPage.Auth.Layout.base')
@section('venodrs-css')
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/typeahead-js/typeahead.css') }}">
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}">
@endsection
@section('content')
    <div class="authentication-wrapper authentication-cover">
        <div class="authentication-inner row m-0">
            <!-- /Left Text -->
            <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
                <div class="flex-row text-center mx-auto">
                    <img src="{{ asset('admin-page/assets/img/pages/register-light.png') }}" alt="Auth Cover Bg color"
                        width="520" class="img-fluid authentication-cover-img"
                        data-app-light-img="pages/register-light.png" data-app-dark-img="pages/register-dark.png">
                    <div class="mx-auto">
                        <h3>چند کلیک تا شروع</h3>
                        <p>
                            دوره آزمایشی 14 روزه رایگان خود را شروع کرده و <br>
                            همین امروز ایجاد برنامه خود را شروع کنید.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /Left Text -->

            <!-- Register -->
            <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
                <div class="w-px-400 mx-auto">
                    <!-- Logo -->
                    <div class="app-brand mb-4">
                        <a href="{{ route('digimag.index') }}" class="app-brand-link gap-2 mb-2">
                            <span class="app-brand-logo demo">
                                <svg width="26px" height="26px" viewbox="0 0 26 26" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>آیکن</title>
                                    <defs>
                                        <lineargradient x1="50%" y1="0%" x2="50%" y2="100%"
                                            id="linearGradient-1">
                                            <stop stop-color="#5A8DEE" offset="0%"></stop>
                                            <stop stop-color="#699AF9" offset="100%"></stop>
                                        </lineargradient>
                                        <lineargradient x1="0%" y1="0%" x2="100%" y2="100%"
                                            id="linearGradient-2">
                                            <stop stop-color="#FDAC41" offset="0%"></stop>
                                            <stop stop-color="#E38100" offset="100%"></stop>
                                        </lineargradient>
                                    </defs>
                                    <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                                            <g id="Login" transform="translate(519.000000, 244.000000)">
                                                <g id="Logo" transform="translate(148.000000, 42.000000)">
                                                    <g id="icon" transform="translate(0.000000, 4.000000)">
                                                        <path
                                                            d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z"
                                                            id="Combined-Shape" fill="#4880EA"></path>
                                                        <path
                                                            d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                                                            id="Combined-Shape2" fill="url(#linearGradient-1)"></path>
                                                        <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0"
                                                            width="7.68181818" height="7.68181818"></rect>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <span class="app-brand-text demo h3 mb-0 fw-bold">فرست</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-3 secondary-font">ماجراجویی اینجا شروع می‌شود</h4>
                    <p class="mb-4">مدیریت برنامه خود را آسان و جذاب کنید!</p>

                    <form id="formAuthentication" class="mb-3" action="{{ route('admin.register.action') }}"
                        method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">نام</label>
                            <input type="text" value="{{ old('name') }}" class="form-control text-start" id="username"
                                name="name" placeholder="نام کاربری خود را وارد کنید" autofocus dir="ltr">
                        </div>
                        <div class="mb-3">
                            <label for="family" class="form-label">نام خانوادگی</label>
                            <input type="text" value="{{ old('family') }}" class="form-control text-start" id="username"
                                name="family" placeholder="نام خانوادگی خود را وارد کنید" autofocus dir="ltr">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">ایمیل</label>
                            <input type="text" value="{{ old('email') }}" class="form-control text-start"
                                id="email" name="email" placeholder="ایمیل خود را وارد کنید" dir="ltr">
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">رمز عبور</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control text-start" name="password"
                                    placeholder="············" aria-describedby="password" dir="ltr">
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                                <label class="form-check-label" for="terms-conditions">
                                    من موافقم با
                                    <a href="javascript:void(0);">سیاست حریم خصوصی و قوانین</a>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100">عضویت</button>
                    </form>

                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            <ul>
                                <li>
                                    {{ $error }}
                                </li>
                            </ul>
                        </div>
                    @endforeach
                    @if (Session::has('email-error'))
                        <div class="w3-panel w3-red" role="alert">
                            <ul>
                                <li class="bg-danger ">
                                    {{ Session::get('email-error') }}
                                </li>
                            </ul>
                        </div>
                    @endif

                    <p class="text-center">
                        <span>حساب کاربری دارید؟</span>
                        <a href="{{ route('admin.login.view') }}">
                            <span>وارد شوید</span>
                        </a>
                    </p>

                    <div class="divider my-4">
                        <div class="divider-text">یا</div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
                            <i class="tf-icons bx bxl-facebook"></i>
                        </a>

                        <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
                            <i class="tf-icons bx bxl-google-plus"></i>
                        </a>

                        <a href="javascript:;" class="btn btn-icon btn-label-twitter">
                            <i class="tf-icons bx bxl-twitter"></i>
                        </a>
                    </div>
                </div>

            </div>
            <!-- /Register -->
        </div>
    </div>
@endsection
@section('vendors-script')
    <!-- Vendors JS -->
    <script src="{{ asset('admin-page/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\Auth\UserRegisterRequest') !!}
@endsection
