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

    {{-- <div class=" mx-5 border-dark bg-dark " style="width: 150px;margin-top: auto">
        @yield('paginator')
    </div> --}}


    <footer class="footer ">
        @include('digimag.base.footer')
    </footer>

    @include('digimag.base.script')
</body>

</html>
