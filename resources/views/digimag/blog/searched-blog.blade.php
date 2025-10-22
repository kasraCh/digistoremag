@extends('digimag.base.base')

@section('content')
    <div class="col-lg-9 col-md-9 col-xs-12 pull-right res-div">
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

            <!-- slider-responsive -->

            <div class="tiles">
                <div class="tiles-wrapper">
                    @if ($article->count() > 0)
                        @foreach ($article as $item)
                            <div class="col-6 col-lg-4 pull-right pr-0 pl-0 my-2">
                                <a href="{{ route('digimag.blog.view', ['id' => $item->id]) }}"
                                    class="tiles-item d-block mt-3">
                                    <img src="{{ asset('admin-page/assets/upload/pictures/' . $item->picture) }}"
                                        alt="" style="width: 250px ; height:250px">
                                    <span>
                                        <span class="tiles-item-txt">
                                            {{ $item->title }}
                                        </span>
                                    </span>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="align-items-center">

                            <img src="{{ asset('digimag/assets/images/no-article.png') }}" alt="test">
                            <p class="text-danger">هیچ مقاله ای در این دسته بندی پیدا نشد</p>

                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- 
    <div class="text-center my-2">

        {!! $article->links() !!}

    </div>
     --}}
@endsection
