<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="light"
  data-sidebar-size="lg"
  data-sidebar-image="none"
  data-preloader="disable"
>
  <head>
    <meta charset="utf-8" />
    <title>@yield('title', 'Dashboard') | Prince Noman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="Prince Noman"
      name="description"
    />
    <meta content="Prince Noman" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href=" {{ asset('assets/images') }}/favicon.ico" />

    <!-- jsvectormap css -->
   
    {{-- <link
      href="{{ asset('assets/libs') }}/jsvectormap/css/jsvectormap.min.css"
      rel="stylesheet"
      type="text/css"
    /> --}}

    <!--Swiper slider css-->
    <link
      href="{{ asset('assets/libs') }}/swiper/swiper-bundle.min.css"
      rel="stylesheet"
      type="text/css"
    />

    <!-- Layout config Js -->
    <script src="{{ asset('assets/js') }}/layout.js"></script>
    <!-- Bootstrap Css -->
    <link
      href=" {{ asset('assets/css') }}/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Icons Css -->
    <link href=" {{ asset('assets/css') }}/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href=" {{ asset('assets/css') }}/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href=" {{ asset('assets/css') }}/custom.min.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
<!-- Begin page -->
<div id="layout-wrapper">
    {{-- Header --}}
    @include('backend.layouts.includes.header')
    {{-- Header --}}
      
    {{-- removeNotificationModal  --}}
    @include('backend.layouts.includes.remove_notification')
    {{-- modal--}}

    {{--  App Menu  --}}
    @include('backend.layouts.includes.sidebar')
    {{-- Left Sidebar End --}}

      {{--  Vertical Overlay --}}
      <div class="vertical-overlay"></div>
     {{--  Vertical Overlay --}}

      {{-- ============================================================== 
                            Start right Content here
       ==============================================================  --}}
      <div class="main-content">
        @yield('content')
     {{-- ============================================================== 
                            End right Content here
       ==============================================================  --}}

      @include('backend.layouts.includes.footer')
      </div>
      {{--  end main content --}}
    </div>
    {{--  END layout-wrapper  --}}

   {{-- start back-to-top --}}
    {{-- <button
      onclick="topFunction()"
      class="btn btn-danger btn-icon"
      id="back-to-top"
    >
      <i class="ri-arrow-up-line"></i>
    </button> --}}
    {{-- end back-to-top --}}

    {{-- preloader --}}
    {{-- @include('backend.layouts.includes.preloader') --}}
    {{-- preloader --}}
    {{-- <div class="customizer-setting d-none d-md-block">
      <div
        class="btn-primary rounded-pill shadow-lg btn btn-icon btn-lg p-2"
        data-bs-toggle="offcanvas"
        data-bs-target="#theme-settings-offcanvas"
        aria-controls="theme-settings-offcanvas"
      >
        <i class="mdi mdi-spin mdi-cog-outline fs-22"></i>
      </div>
    </div> --}}

{{--Theme Settings --}}
{{-- @include('backend.layouts.includes.theme_settings') --}}

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="{{ asset('assets/libs') }}/simplebar/simplebar.min.js"></script> --}}
    <script src="{{ asset('assets/libs') }}/node-waves/waves.min.js"></script>
    <script src="{{ asset('assets/libs') }}/feather-icons/feather.min.js"></script>
    {{-- <script src="{{ asset('assets/js') }}/pages/plugins/lord-icon-2.1.0.js"></script> --}}
    {{-- <script src="{{ asset('assets/js') }}/plugins.js"></script> --}}

    <!-- apexcharts -->
    {{-- <script src="{{ asset('assets/libs') }}/apexcharts/apexcharts.min.js"></script> --}}

    <!-- Vector map-->
    {{-- <script src="{{ asset('assets/libs') }}/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="{{ asset('assets/libs') }}/jsvectormap/maps/world-merc.js"></script> --}}

    <!--Swiper slider js-->
    <script src="{{ asset('assets/libs') }}/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    {{-- <script src="{{ asset('assets/js') }}/pages/dashboard-ecommerce.init.js"></script> --}}

    <!-- App js -->
    <script src="{{ asset('assets/js') }}/app.js"></script>
  </body>
</html>
