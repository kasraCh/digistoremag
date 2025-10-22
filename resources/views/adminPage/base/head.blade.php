<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>داشبورد - تجزیه و تحلیل | فرست - قالب مدیریت بوت‌استرپ</title>

    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('admin-page/assets/img/favicon/favicon.ico') }}">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/fonts/boxicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/fonts/flag-icons.css') }}">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/css/rtl/core.css') }}"
        class="template-customizer-core-css">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/css/rtl/theme-default.css ') }}"
        class="template-customizer-theme-css">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/css/rtl/rtl.css') }}">

    @stack('dropify-css-stack')

    @yield('vendors-css')

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('admin-page/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('admin-page/assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('admin-page/assets/js/config.js') }}"></script>
</head>
