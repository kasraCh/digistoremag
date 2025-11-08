<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    @include('site.base.head')
</head>

<body>

    <header class="homepage-top">
        @include('site.base.header')
    </header>

    @yield('content')

    <div class="">

        <footer class="footer">
            @include('site.base.footer')
        </footer>
    </div>

    @include('site.base.script')
</body>

</html>
