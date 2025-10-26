<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    @include('digimag.base.head')
</head>

<body>

    <header class="homepage-top">
        @include('digimag.base.headder')
    </header>


    @include('digimag.base.head')

    @include('digimag.base.menu')

    @yield('content')



    <footer class="footer ">
        @include('digimag.base.footer')
    </footer>

    @include('digimag.base.script')
</body>

</html>
