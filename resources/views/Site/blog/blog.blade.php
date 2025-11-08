@extends('site.blog.Layout.base')
@section('content')
    <main class="pull-right main-single">
        <div class="col-12">
            <div class="main-aside pull-right sticky-sidebar sticky-sidebar-distant">
                <nav>
                    <ul class="stick-menu">
                        <li class="stick-menu-item stick-logo">
                            <a href="#" title="دیجی استور مگ">MAG</a>
                        </li>
                        <li class="stick-menu-item search-btn">
                            <a href="{{ route('digimag.index') }}">
                                <img src="{{ asset('digimag/assets/images/header/search-menu.png') }}" alt="search">
                            </a>
                        </li>
                        <li class="stick-menu-item login-popup-btn">
                            <a href="{{ route('digimag.blog.category', ['category' => $blog->category->category]) }}">
                                <img src="{{ asset('digimag/assets/images/header/user.png') }}" alt="user">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="main-content">
                <div class="topics wrapper">
                    <div class="col-lg-8 col-md-8 col-xs-12 pull-right">
                        <div class="topics-content">
                            <div class="post-module">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('digimag.index') }}">خانه</a></li>
                                        <li class="breadcrumb-item">
                                            <a
                                                href="{{ route('digimag.blog.category', ['category' => $blog->category->category]) }}">{{ $blog->category->category }}</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
                                    </ol>
                                </nav>
                                <div class="sep my-5"></div>
                                <article>
                                    <h1 class="txt-entry-title">{{ $blog->title }}</h1>
                                    <div class="post-module-title">
                                        <div class="social-act">
                                            <div class="bookmark-wrapper wishlist-btn login-required">
                                                <div class="social-act-sep"></div>
                                                <span class="popularity pull-left">
                                                    <span class="popularity-likes">
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-module-author">
                                        <div class="user-profile-stat-wrapper">
                                            <img src="{{ asset('digimag/assets/images/slider-product/profile/Default_Profile_Picture1.jpg') }}"
                                                width="35" height="35" alt="avatar" class="avatar">
                                            <span class="vcard-author post-module-author-name">
                                                <p>
                                                    {{ $author->user->name }}
                                                </p>
                                            </span>
                                        </div>
                                        <span class="post-module-author-date published">
                                            <i class="mdi mdi-clock-outline"></i>
                                            {{ \Morilog\Jalali\CalendarUtils::strftime('Y/m/d H:i:s', strtotime($blog->created_at)) }}
                                        </span>
                                    </div>
                                    <div class="post-attachment my-3" style="width: 717px; height: 403px;">
                                        <img src="{{ asset('admin-page/assets/upload/pictures/' . $blog->picture) }}"
                                            alt="topics" class="post-module-img wp-post-image w-100 h-100">
                                    </div>
                                    <div class="post-module-content">

                                        {!! $blog->content !!}

                                    </div>

                                    <div class="sep w-100"></div>
                                    <div class="post-module-tags">
                                        <span class="post-module-tags-title">دسته بندی : </span>
                                        <a rel="tag"
                                            class="post-tag post-module-tags-item item">{{ $author->category->category }}</a>
                                    </div>
                                    <div class="sep w-100"></div>
                                </article>
                                <div class="comments-template">
                                    <div class="comment-respond">
                                        <div>
                                            <p>تعداد دیدگاه ها :
                                                {{ $blog->comments->count() }}

                                            </p>
                                        </div>

                                        <br>

                                        <strong id="reply-title" class="comment-reply-title">دیدگاه شما</strong>
                                        <form action="{{ route('digimag.blog.comment', ['id' => $blog->id]) }}"
                                            method="POST" class="comment-form focused">
                                            @csrf
                                            <div class="comment-form-avatar pull-right">
                                                <img src="{{ asset('digimag/assets/images/user.png') }}" alt="user"
                                                    class="img-user">
                                            </div>
                                            <div class="comment-fields">
                                            </div>
                                            <div class="comment-form-comment">
                                                <textarea id="comment" name="comment" class="form-control" cols="45" rows="8" aria-required="true"
                                                    placeholder="دیدگاه" required></textarea>
                                            </div>
                                            <div class="sep w-100 mt-3 pull-right"></div>
                                            <div class="form-submit pt-3 pull-left">

                                                @auth

                                                    <button type="submit" class="comment-submit-btn">ارسال
                                                        دیدگاه</button>
                                                @else
                                                    <p>یرای ثبت دیدگاه خود ابتدا لطفا در حساب کابری خود وارد شوید !</p>
                                                @endauth

                                            </div>
                                        </form>
                                        <div class="my-3">
                                            @if (Session::has('success'))
                                                <div class="w3-panel w3-red" role="alert">
                                                    <ul>
                                                        <li class="bg-success ">
                                                            {{ Session::get('success') }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach ($blog->comments as $comment)
                                <div class="container w-auto my-3 border">
                                    <div class="card">
                                        <div class="card-hesder">{{ $comment->user->name }} نوشته :</div>
                                        <div class="card-body">
                                            <p class="card-text">
                                                {{ $comment->comment }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-12 pull-left sticky-sidebar">
            <div class="post-nav">
                <div class="post-nav-top">
                    <div class="text-center">
                        <div class="widget-suggestion widget card">
                            <header class="card-header promo-single-headline product-header">
                                <h3 class="card-title">
                                    <span class="bold">جدیدترین</span>
                                    <span>مقالات در دیجی مگ</span>
                                </h3>
                            </header>
                            <div id="suggestion-slider" class="owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(1369px, 0px, 0px); transition: all 0.25s ease 0s; width: 2190px;">
                                        @foreach ($lastThreeItem as $index => $item)
                                            <div class="owl-item" style="width: 273.75px;">
                                                <div class="item">
                                                    <a href="{{ route('digimag.blog.view', ['id' => $item->id]) }}">
                                                        <img src="{{ $item->picture_url }}" alt="topics">
                                                    </a>
                                                    <h3 class="product-title">
                                                        <a href="#">{{ $item->title }}</a>
                                                    </h3>
                                                    <div class="price">
                                                        <span>نویسنده :</span>
                                                        <span class="amount">{{ $item->user->name }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="home-menu-bottom-sidebar my-3" class="sidebar-digimag">
                            <div class="home-menu-bottom-widget">
                                <a href="#" class="promotion">
                                    <img src="{{ asset('digimag/assets/images/sidebar/buying-guide-under-menu-tile-2.jpg') }}"
                                        class="promotion-img" alt="menu">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
