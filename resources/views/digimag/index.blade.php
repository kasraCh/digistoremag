@extends('digimag.base.base')

@section('content')
    <div class="col-lg-9 col-md-9 col-xs-12 pull-right res-div" style="position: relative">
        <div class="homepage-header-content">
            <div class="home-top-tile-banner">
                <div class="home-hover-widget">
                    <a href="#">
                        <img class="w-100" src="{{ asset('digimag/assets/images/banner/corona-top-banner-4.jpg') }}"
                            alt="banner">
                    </a>
                </div>
            </div>
            <!-- slider-responsive -->


            <section class="slider-container">
                <div class="slider-wrapper">
                    <h2>جدیدترین مقالات</h2>
                    <div class="slider">
                        @foreach ($lastThreeItem as $index => $item)
                            <div class="slide" id="slide-{{ $index + 1 }}">
                                <a href="{{ route('digimag.blog.view', ['id' => $item->id]) }}"
                                    class="tiles-item d-block mt-3">
                                    <img src="{{ $item->picture_url }}" alt="Article Image">
                                    <span>
                                        <span class="tiles-item-txt">
                                            {{ $item->title }}
                                        </span>
                                    </span>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="slider-nav">
                        @foreach ($lastThreeItem as $index => $item)
                            <a href="#slide-{{ $index + 1 }}"></a>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- slider-responsive -->
            <div class="col-lg-12 col-md-12 col-xs-12 pull-right mt-4 my-5">
                <span class="module-title-txt">پر بحث ترین مقالات </span>
                <div class="row">
                    <div class="col-12 flickity">
                        <div class="widget widget-product card">
                            <header class="card-header">
                                <div class="module-title-sep"></div>
                            </header>
                            <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                        @foreach ($items as $item)
                                            <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                                <div class="item">

                                                    <div class="" style="height: 150px">
                                                        <a href="{{ route('digimag.blog.view', ['id' => $item->id]) }}">
                                                            <img src="{{ $item->picture_url }}" class="img-fluid mh-100"
                                                                alt="slider" style="height: 100px">
                                                        </a>
                                                    </div>

                                                    <h2 class="post-title">
                                                        <a href="#">
                                                            {{ $item->title }}
                                                        </a>
                                                    </h2>

                                                    <div class="item-details">
                                                        <div class="user-profile-stat-wrapper">
                                                            <img src="{{ asset('digimag/assets/images/slider-product/profile/Default_Profile_Picture1.jpg') }}"
                                                                class="avatar" alt="avatar">
                                                            <span class="item-details-author">
                                                                {{ $item->user->name }}
                                                            </span>
                                                        </div>
                                                        <div class="item-details-date">
                                                            <i class="fa fa-clock-o"></i>
                                                            {{ \Morilog\Jalali\CalendarUtils::strftime('Y/m/d H:i:s', strtotime($item->created_at)) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tiles my-5">
                <p>مورد پسند ترین مقالات</p>
                <a href="{{ route('digimag.blog.all') }}">مشاهده همه مقالات</a>
                <div class="tiles-wrapper my-2">
                    @foreach ($article as $item)
                        <div class="col-6 col-lg-4 pull-right pr-0 pl-0 my-2">
                            <a href="{{ route('digimag.blog.view', ['id' => $item->id]) }}"
                                class="tiles-item d-block mt-3">
                                <img src="{{ $item->picture_url }}" alt="" style="width: 250px ; height:250px">
                                <span>
                                    <span class="tiles-item-txt">
                                        {{ $item->title }}
                                    </span>
                                </span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
