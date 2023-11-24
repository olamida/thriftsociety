<!doctype html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ appName() }} | @yield('title')</title>
        <meta name="description" content="@yield('meta_description', appName())">
        <meta name="author" content="@yield('meta_author', 'Yusuf N. Yahaya')">
        @yield('meta')

        @stack('before-styles')
        
        <!-- Favicons -->
        <link href="{{ asset('office/assets/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('office/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('office/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('office/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('office/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('office/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
        <link href="{{ asset('office/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
        <link href="{{ asset('office/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('office/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('office/assets/css/style.css') }}" rel="stylesheet">

        @stack('after-styles')
    </head>
    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">    
            @include('backend.office.includes.header')
        </header><!-- End Header -->

        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">
            @include('backend.office.includes.sidebar')
        </aside><!-- End Sidebar-->

        <main id="main" class="main">
            @yield('content')
        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            @include('backend.office.includes.footer')
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        @stack('before-scripts')
        
        <!-- Vendor JS Files -->
           <script src="{{ asset('office/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
           <script src="{{ asset('office/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
           <script src="{{ asset('office/assets/vendor/chart.js/chart.umd.js') }}"></script>
           <script src="{{ asset('office/assets/vendor/echarts/echarts.min.js') }}"></script>
           <script src="{{ asset('office/assets/vendor/quill/quill.min.js') }}"></script>
           <script src="{{ asset('office/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
           <script src="{{ asset('office/assets/vendor/tinymce/tinymce.min.js') }}"></script>
           <script src="{{ asset('office/assets/vendor/php-email-form/validate.js') }}"></script>

           <!-- Main JS File -->
           <script src="{{ asset('office/assets/js/main.js') }}"></script>

           <livewire:scripts />
           @stack('after-scripts')
    </body>
</html>
