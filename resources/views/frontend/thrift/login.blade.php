<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ appName() }} | @yield('Welcome Login')</title>
        <meta name="description" cohellontent="@yield('meta_description', appName())">
        <meta name="author" content="@yield('meta_author', 'Yusuf N. Yahaya')">
        @yield('meta')

        @stack('before-styles')
        <link rel="icon" type="image/x-icon" href="{{ asset('office/cork/assets/img/favicon.ico') }}"/>

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
        <link href="{{ asset('office/cork/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('office/cork/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('office/cork/assets/css/authentication/form-2.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <link rel="{{ asset('office/cork/stylesheet" type="text/css') }}" href="assets/css/forms/theme-checkbox-radio.css">
        <link rel="{{ asset('office/cork/stylesheet" type="text/css') }}" href="assets/css/forms/switches.css">
        @stack('after-styles')
    </head>
    <body class="form">

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="form-container outer">
            <div class="form-form">
                <div class="form-form-wrap">
                    <div class="form-container">

                        <div class="form-content">
                            <div class="d-flex user-meta">
                                <img src="{{ asset('office/assets/img/file.enc') }}" class="usr-profile" alt="avatar">
                                <div class="">
                                    <p class="">
                                        <x-utils.link href="http://laravel-boilerplate.com" target="_blank" :text="__(appName())" />
                                    </p>
                                </div>
                            </div>     
                            <h4 class="">Sign In</h4>
                            <p class="">Log in with your credentials to continue.</p>
                            
                            <form class="text-left">
                                <div class="form">

                                    <div id="username-field" class="field-wrapper input">
                                        <label for="username">USERNAME</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <input id="username" name="username" type="text" class="form-control" placeholder="e.g: ndanusa">
                                    </div>

                                    <div id="password-field" class="field-wrapper input mb-2">
                                        <div class="d-flex justify-content-between">
                                            <label for="password">PASSWORD</label>
                                            <a href="auth_pass_recovery_boxed.html" class="forgot-pass-link">Forgot Password?</a>
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                        <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    </div>
                                    <div class="d-sm-flex justify-content-between">
                                        <div class="field-wrapper">
                                            <button type="submit" class="btn btn-primary" value="">Log In</button>
                                        </div>
                                    </div>

                                    <div class="footer-wrapper">
                                        <div class="footer-section f-section-2">
                                            <p class="">
                                                @lang('Powered by')
                                                <x-utils.link href="https://olandasolutions" target="_blank" text="OlandaSolutions" />
                                                with 
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                                </svg>
                                                &copy; {{ date('Y') }}
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>                    
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTAINER -->

        @stack('before-scripts')
        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="{{ asset('office/cork/assets/js/libs/jquery-3.1.1.min.js') }}"></script>

        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="{{ asset('office/cork/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('office/cork/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('office/cork/bootstrap/js/bootstrap.min.js') }}"></script>
        
        <!-- END GLOBAL MANDATORY SCRIPTS -->
        <script src="{{ asset('office/cork/assets/js/authentication/form-2.js') }}"></script>

        @stack('after-scripts')
    </body>
</html>