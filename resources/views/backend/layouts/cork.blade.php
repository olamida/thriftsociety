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
        @yield('meta')

        @stack('before-styles')
        <link rel="icon" type="image/x-icon" href="{{ asset('office/cork/img/favicon.ico') }}"/>
        <link href="{{ asset('office/cork/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ asset('office/cork/assets/js/loader.js') }}"></script>

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
        <link href="{{ asset('office/cork/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('office/cork/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
        <link href="{{ asset('office/cork/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('office/cork/assets/css/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
        @stack('after-styles')
    </head>
    <body class="alt-menu sidebar-noneoverflow">
        <!-- BEGIN LOADER -->
        <div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
        <!--  END LOADER -->

        <!--  BEGIN NAVBAR  -->
        @include('backend.office.includes.header')
        <!--  END NAVBAR  -->

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="search-overlay"></div>

            <!--  BEGIN TOPBAR  -->
            <div class="topbar-nav header navbar" role="banner">
            @include('backend.office.includes.nav')
            </div>
            <!--  END TOPBAR  -->
            
            <!--  BEGIN CONTENT PART  -->
            <div id="content" class="main-content">
                <div class="layout-px-spacing">

                    <div class="page-header">
                        <div class="page-title">
                            <h3>NAPTIN-THRIFT Dashboard</h3>
                        </div>
                        <div class="dropdown filter custom-dropdown-icon">
                            <a class="dropdown-toggle btn" href="#" role="button" id="filterDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text"><span>Show</span> : Daily Analytics</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="filterDropdown">
                                <a class="dropdown-item" data-value="<span>Show</span> : Daily Analytics" href="javascript:void(0);">Daily Analytics</a>
                                <a class="dropdown-item" data-value="<span>Show</span> : Weekly Analytics" href="javascript:void(0);">Weekly Analytics</a>
                                <a class="dropdown-item" data-value="<span>Show</span> : Monthly Analytics" href="javascript:void(0);">Monthly Analytics</a>
                                <a class="dropdown-item" data-value="Download All" href="javascript:void(0);">Download All</a>
                                <a class="dropdown-item" data-value="Share Statistics" href="javascript:void(0);">Share Statistics</a>
                            </div>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">
                        <!-- Start #main -->
                        @yield('content')
                    </div><!-- End #main -->

                    <!-- ======= Footer ======= -->
                    @include('backend.office.includes.footer')
                    <!-- End Footer -->

                </div>
            </div>
            <!--  END CONTENT PART  -->

        </div>
        <!-- END MAIN CONTAINER -->

        @stack('before-scripts')
        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="{{ asset('office/cork/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('office/cork/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('office/cork/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('office/cork/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('office/cork/assets/js/app.js') }}"></script>
        <script>
            $(document).ready(function() {
                App.init();
            });
        </script>
        <script src="{{ asset('office/cork/assets/js/custom.js') }}"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script src="{{ asset('office/cork/plugins/apex/apexcharts.min.js') }}"></script>
        <script src="{{ asset('office/cork/assets/js/dashboard/dash_2.js') }}"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        @stack('after-scripts')
    </body>
</html>