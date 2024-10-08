<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Miami Luxury Yachts & Cars</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/mmenu.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    @vite(['resources/js/app.js'])
</head>

<body x-data="{ loaded: true }" style="overflow: hidden" :style="{ overflow: loaded ? 'hidden' : 'auto' }">
    <!-- ===== Preloader Start ===== -->
    <x-preloader />
    <!-- ===== Preloader End ===== -->
    <div class="boxcar-wrapper">

        <!-- main header -->
        @if (Route::is('cars-home') || Route::is('yachts-home'))
            <x-header-cars />
        @else
            <x-header-all />
        @endif

        <!--main content-->
        @yield('content')

        <!-- main footer -->
        <x-footer />
    </div>
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/slick-animation.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/appear.js') }}"></script>
    <script src="{{ asset('js/mixitup.js') }}"></script>
    <script src="{{ asset('js/knob.js') }}"></script>
    <script src="{{ asset('js/mmenu.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
    <div class="mm-wrapper__blocker mm-slideout"><a href="#mm-0"><span class="mm-sronly">Close menu</span></a></div>
</body>

</html>
