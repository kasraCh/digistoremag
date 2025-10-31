<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('admin-page/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('admin-page/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('admin-page/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('admin-page/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('admin-page/assets/vendor/libs/hammer/hammer.js') }}"></script>

<script src="{{ asset('admin-page/assets/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('admin-page/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

<script src="{{ asset('admin-page/assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Main JS -->
<script src="{{ asset('admin-page/assets/js/main.js') }}"></script>


@yield('vendors-script')

@stack('dropify-stack')
