<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ appName() }} | @yield('title')</title>
        <meta name="description" cohellontent="@yield('meta_description', appName())">
        <meta name="author" content="@yield('meta_author', 'Yusuf N. Yahaya')">
        <link rel="icon" type="image/x-icon" href="{{ asset('office/cork/assets/img/favicon.ico') }}"/>
        @yield('meta')

        @stack('before-styles')
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
        <link href="{{ asset('office/backcork/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('office/backcork/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->



        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
        <link href="{{ asset('office/backcork/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
        <style>
            /*
                The below code is for DEMO purpose --- Use it if you are using this demo otherwise Remove it
            */
            .page-title {
                float: none;
                margin-top: 0;
                margin-bottom: 0;
                align-self: center;
                padding-right: 15px;
                border-right: 1px solid #bfc9d4;
                margin-right: 15px;
            }
            .page-title h3 {
                margin-bottom: 0;
                font-size: 20px;
            }
            .page-header {
                display: flex;
                padding: 0;
                margin-bottom: 16px;
                margin-top: 30px;
                justify-content: flex-start;
            }
            .breadcrumb-one {
                display: inline-block;
                align-self: center;
            }
            .breadcrumb-one .breadcrumb {
                padding: 0;
                vertical-align: text-bottom;
                margin-bottom: 0;
                background: transparent;
            }
            .breadcrumb-one .breadcrumb-item {
                align-self: center;
            }
            .breadcrumb-one .breadcrumb-item a {
                color: #888ea8;
                vertical-align: text-bottom;
            }
            .breadcrumb-one .breadcrumb-item a svg {
                width: 20px;
                height: 20px;
                vertical-align: sub;
            }
            .breadcrumb-one .breadcrumb-item.active a {
                color: #009688;
            }
            .breadcrumb-one .breadcrumb-item span {
                vertical-align: text-bottom;
            }
            .breadcrumb-one .breadcrumb-item.active {
                color: #009688;
                font-weight: 600;
            }
            .breadcrumb-one .breadcrumb-item+.breadcrumb-item {
                padding: 0px;
            }
            .breadcrumb-one .breadcrumb-item+.breadcrumb-item::before {
                color: #515365;
                font-size: 0;
                content: url('data:image/svg+xml, <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 24 24" fill="none" stroke="%23555" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>');
                vertical-align: text-top;
                padding: 0 6px;
            }


            @media(max-width: 575px) {
                .page-header {
                    display: block;
                }
                .page-title {
                    margin-bottom: 20px;
                    border: none;
                    padding-right: 0;
                    margin-right: 0;
                }
            }


            /*
                Just for demo purpose ---- Remove it.
            */
            /*<starter kit design>*/

            .widget-one {

            }
            .widget-one h6 {
                font-size: 20px;
                font-weight: 600;
                letter-spacing: 0px;
                margin-bottom: 22px;
            }
            .widget-one p {
                font-size: 15px;
                margin-bottom: 0;
            }

            /*</starter kit design>*/

        </style>
        <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
        @stack('after-styles')

    </head>

    <body class="alt-menu sidebar-noneoverflow">

        <!--  BEGIN NAVBAR  -->
        @include('backend.office.includes.header')
        <!--  END NAVBAR  -->

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="search-overlay"></div>

            <!--  BEGIN TOPBAR  -->
            @include('backend.office.includes.nav')
            <!--  END TOPBAR  -->
            
            <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content">
                <div class="layout-px-spacing">
                    <div class="page-header">
                        <!--  BEGIN BREADCRUMB  -->
                        @include('backend.office.includes.breadcrumbs')
                        <!--  END BREADCRUMB  -->                        
                    </div>

                    <!-- Start #main -->
                    <div class="row">
                    @yield('content')
                    </div>
                    <!-- End #main -->
                    
                </div>

                <!-- ======= Footer ======= -->
                @include('backend.office.includes.footer')
                <!-- End Footer -->
            </div>
            <!--  END CONTENT AREA  -->

        </div>
        <!-- END MAIN CONTAINER -->

        @stack('before-scripts')
        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="{{ asset('office/backcork/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('office/backcork/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('office/backcork/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('office/backcork/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('office/backcork/assets/js/app.js') }}"></script>
        <script>
            $(document).ready(function() {
                App.init();
            });
        </script>
        <script src="{{ asset('office/backcork/assets/js/custom.js') }}"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->
        @stack('after-scripts')

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script src="{{ asset('office/backcork/plugins/apex/apexcharts.min.js') }}"></script>
        <script src="{{ asset('office/backcork/assets/js/dashboard/dash_1.js') }}"></script>
        <script src="{{ asset('office/backcork/assets/js/dashboard/dash_2.js') }}"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    </body>
</html>