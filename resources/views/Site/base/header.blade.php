        <div class="d-block">
            <div class="col-lg-9 col-md-9 col-xs-12 pull-right res-div">
                <div class="header-right">
                    <div class="col-lg-4 col-md-4 col-xs-12 pull-right pr-0 pl-0 res-div">
                        <div class="mobile-bar">
                            <!--    responsive-megamenu-mobile----------------->
                            <nav class="sidebar">
                                <div class="nav-header">
                                    <div class="header-cover"></div>
                                    <div class="logo-wrap">
                                        <a class="logo-icon" href="{{ route('digimag.index') }}"><img alt="logo-icon"
                                                src="{{ asset('digimag/assets/images/logo.png') }}" width="40"></a>
                                    </div>
                                </div>
                            </nav>
                            <div class="nav-btn nav-slider">
                                <span class="linee1"></span>
                                <span class="linee2"></span>
                                <span class="linee3"></span>
                            </div>
                            <div class="overlay"></div>
                            <!--    responsive-megamenu-mobile -->

                            <!-- login -->
                            <div class="header-left header-responsive-left">
                                <div class="search search-btn">
                                    <a href="#" class="d-block">
                                        <img src="{{ asset('digimag/assets/images/header/search.png') }}"
                                            alt="search">
                                    </a>
                                </div>
                                <div class="user-pane">
                                    <a href="#" data-toggle="modal" data-target="#staticBackdrop">
                                        <img src="{{ asset('digimag/assets/images/header/user.png') }}" alt="user">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('digimag.index') }}" title="دیجی استور مگ" class="logo">
                            <img src="{{ asset('digimag/assets/images/logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-xs-12 pull-left res-div my-3">
                        <div class="search-box">
                            <div class="search-title">جستجو میان هزاران مقاله:</div>
                            <form action="{{ route('digimag.blog.search') }}" method="GET" class="search-form">
                                <input type="search" name="search" placeholder="جستجوی مقاله..." class="search-input">
                                <button type="submit" class="search-btn">جستجو</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-xs-12 pull-left">
                <div class="header-left">

                    <div class="homepage-top-sep"></div>
                    <div class="user-pane">

                        @auth
                            <div>
                                <a href="{{ route('logout') }}" class="btn btn-warning btn-sm" style="color: black">
                                    خروج از حساب کاربری</a>
                                @if ($showAdminButton)
                                    <a href="{{ route('admin.view') }}" class="btn btn-info text-dark btn-sm">پنل
                                        ادمین</a>
                                @endif
                            </div>
                        @else
                            <a href="{{ route('admin.login.view') }}">ورود</a>
                            <span>/</span>
                            <a href="{{ route('admin.register.view') }}">ثبت نام</a>
                        @endauth

                    </div>
                </div>
            </div>
        </div>
