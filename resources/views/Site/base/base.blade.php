<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    @include('site.base.head')
</head>

<body>

    <header class="homepage-top">
        @include('site.base.header')
    </header>


    @include('site.base.head')

    @include('site.base.menu')

    @yield('content')



    <footer class="footer ">
        @include('site.base.footer')
    </footer>

    @include('site.base.script')
</body>

</html>
