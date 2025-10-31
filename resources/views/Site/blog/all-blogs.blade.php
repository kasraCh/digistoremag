@extends('site.base.base')
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
            <div class="text-left my-5">
                <form method="GET" action="" class="form-select">
                    <select name="sort" onchange="this.form.submit()" class="custom-select">
                        <option value="">همه</option>
                        <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>جدیدترین</option>
                        <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>قدیمی‌ترین</option>
                    </select>

                </form>
            </div>
            <div class="tiles my-5">
                {{-- <a href="{{ route('digimag.blog.sort.new', ['sort' => 'new']) }}">اسا</a> --}}
                <p>تمامی مقالات موجود در سایت</p>
                <div class="tiles-wrapper my-2">
                    @foreach ($article as $item)
                        <div class="col-6 col-lg-4 pull-right pr-0 pl-0 my-2">
                            <a href="{{ route('digimag.blog.view', ['id' => $item->id]) }}" class="tiles-item d-block mt-3">
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
        @endsection
