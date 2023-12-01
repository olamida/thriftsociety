<!doctype html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>
    <head>
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
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }

            .container .table-wrap {
                margin: 20px auto;
                overflow-x: auto
            }

            .container .table-wrap::-webkit-scrollbar {
                height: 5px
            }

            .container .table-wrap::-webkit-scrollbar-thumb {
                border-radius: 5px;
                background-image: linear-gradient(to right, #5D7ECD, #0C91E6)
            }

            img {
                height: 30px;
                width: 30px;
                object-fit: cover;
            }

            .w100 {
                max-width: 100px;
                min-width: 100px;
            }

            .w350 {
                max-width: 550px;
                min-width: 550px;
            }

            .btn.btn-primary.h-1 {
                background-color: #FB0778;
                color: white;
                font-size: 14px;
                border: none;
                padding: 2px 10px;
            }

            .btn.btn-primary.h-1:hover {
                background-color: #ee1a7d;
            }

            .btn.btn-primary.h-2 {
                background-color: #f8d303;
                color: white;
                font-size: 14px;
                border: none;
                padding: 2px 10px;
            }

            .btn.btn-primary.h-2:hover {
                background-color: #c5b140;
            }

            .btn.btn-primary.h-3 {
                background-color: #6f00ff;
                color: white;
                font-size: 14px;
                border: none;
                padding: 2px 10px;
            }

            .btn.btn-primary.h-3:hover {
                background-color: #7638c9;
            }

            .bg-pink {
                height: 10px;
                width: 10px;
                background-color: #ee1a7d;
            }

            .bg-yellow {
                height: 10px;
                width: 10px;
                background-color: #f8d303;
            }

            .bg-violet {
                height: 10px;
                width: 10px;
                background-color: #6f00ff;
            }


            .btn.btn-secondary.pink {
                background-color: transparent;
                font-size: 12px;
                border: none;
                background-color: #f5cade;
                color: #ee1a7d;
                width: 100%;
                padding: 5px 15px;
            }

            .btn.btn-secondary.violet {
                background-color: transparent;
                font-size: 12px;
                border: none;
                color: #7638c9;
                background-color: #d8c6f0;
                width: 100%;
                padding: 5px 15px;
            }

            .btn.btn-secondary.yellow {
                background-color: transparent;
                font-size: 12px;
                border: none;
                background-color: #f7ecb1;
                color: #f88e03;
                width: 100%;
                padding: 5px 15px;
            }
            @media(min-width: 992px) {
                .container .table-wrap {
                    overflow: hidden;
                }
            }
        </style>
        <style>
            @import url("https://unpkg.com/@webpixels/css@1.1.5/dist/index.css");
            @import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");
        </style>
    </head>

    <body>
        
    <!-- Banner -->
    <a href="https://webpixels.io/components?ref=bbbootstrap" class="btn w-full btn-primary text-truncate rounded-0 py-2 border-0 position-relative" style="z-index: 1000;"> 
        <strong>Crafted with Webpixels CSS:</strong> The design system for Bootstrap 5. Browse all components &rarr;
    </a>
    <!-- Dashboard -->
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary"> 
        <!-- Vertical Navbar --> 
        <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical"> 
            <div class="container-fluid"> 
                <!-- Toggler --> 
                <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation"> 
                    <span class="navbar-toggler-icon"></span> 
                </button> 
                <!-- Brand --> 
                <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#"> 
                    <img src="https://preview.webpixels.io/web/img/logos/clever-primary.svg" alt="..."> 
                </a> 
                <!-- User menu (mobile) --> 
                <div class="navbar-user d-lg-none"> 
                    <!-- Dropdown --> 
                    <div class="dropdown"> 
                        <!-- Toggle --> 
                        <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <div class="avatar-parent-child"> 
                                <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar- rounded-circle"> 
                                <span class="avatar-child avatar-badge bg-success"></span> 
                            </div> 
                        </a> 
                        <!-- Menu --> 
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar"> 
                            <a href="#" class="dropdown-item">Profile</a> 
                            <a href="#" class="dropdown-item">Settings</a> 
                            <a href="#" class="dropdown-item">Billing</a> 
                            <hr class="dropdown-divider"> 
                            <a href="#" class="dropdown-item">Logout</a> 
                        </div> 
                    </div> 
                </div> 
                <!-- Collapse --> 
                <div class="collapse navbar-collapse" id="sidebarCollapse"> 
                    <!-- Navigation --> 
                    <ul class="navbar-nav"> 
                        <li class="nav-item"> 
                            <a class="nav-link" href="#"> 
                                <i class="bi bi-house"></i> Dashboard 
                            </a> 
                        </li> 
                        <li class="nav-item"> 
                            <a class="nav-link" href="#"> 
                                <i class="bi bi-bar-chart"></i> Analitycs 
                            </a> 
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="#"> 
                                <i class="bi bi-chat"></i> Messages 
                                <span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">6</span>
                            </a> 
                        </li> 
                        <li class="nav-item"> 
                            <a class="nav-link" href="#"> 
                                <i class="bi bi-bookmarks"></i> Collections 
                            </a> 
                        </li> 
                        <li class="nav-item"> 
                            <a class="nav-link" href="#"> 
                                <i class="bi bi-people"></i> Users 
                            </a> 
                        </li> 
                    </ul> 
                    <!-- Divider --> 
                    <hr class="navbar-divider my-5 opacity-20"> 
                    <!-- Navigation --> 
                    <ul class="navbar-nav mb-md-4"> 
                        <li> 
                            <div class="nav-link text-xs font-semibold text-uppercase text-muted ls-wide" href="#"> Contacts 
                                <span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-4">13</span> 
                            </div> 
                        </li> 
                        <li> 
                            <a href="#" class="nav-link d-flex align-items-center"> 
                                <div class="me-4"> 
                                    <div class="position-relative d-inline-block text-white"> 
                                        <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar rounded-circle"> 
                                        <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-success rounded-circle"></span> 
                                    </div> 
                                </div> 
                                <div> 
                                    <span class="d-block text-sm font-semibold"> Marie Claire </span> 
                                    <span class="d-block text-xs text-muted font-regular"> Paris, FR </span> 
                                </div> 
                                <div class="ms-auto"> 
                                    <i class="bi bi-chat"></i> 
                                </div> 
                            </a> 
                        </li> 
                        <li> 
                            <a href="#" class="nav-link d-flex align-items-center"> 
                                <div class="me-4"> 
                                    <div class="position-relative d-inline-block text-white"> 
                                        <span class="avatar bg-soft-warning text-warning rounded-circle">JW</span> 
                                        <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-success rounded-circle"></span> 
                                    </div> 
                                </div> 
                                <div> 
                                    <span class="d-block text-sm font-semibold"> Michael Jordan </span> 
                                    <span class="d-block text-xs text-muted font-regular"> Bucharest, RO </span> 
                                </div> 
                                <div class="ms-auto"> 
                                    <i class="bi bi-chat"></i> 
                                </div> 
                            </a> 
                        </li> 
                        <li> 
                            <a href="#" class="nav-link d-flex align-items-center"> 
                                <div class="me-4"> 
                                    <div class="position-relative d-inline-block text-white"> 
                                        <img alt="..." src="https://images.unsplash.com/photo-1610899922902-c471ae684eff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar rounded-circle"> 
                                        <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-danger rounded-circle"></span> 
                                    </div> 
                                </div> <div> <span class="d-block text-sm font-semibold"> Heather Wright </span> <span class="d-block text-xs text-muted font-regular"> London, UK </span> </div> <div class="ms-auto"> <i class="bi bi-chat"></i> </div> </a> </li> </ul> <!-- Push content down --> <div class="mt-auto"></div> <!-- User (md) --> <ul class="navbar-nav"> <li class="nav-item"> <a class="nav-link" href="#"> <i class="bi bi-person-square"></i> Account </a> </li> <li class="nav-item"> <a class="nav-link" href="#"> <i class="bi bi-box-arrow-left"></i> Logout </a> </li> </ul> </div> </div> </nav> <!-- Main content --> <div class="h-screen flex-grow-1 overflow-y-lg-auto"> <!-- Header --> <header class="bg-surface-primary border-bottom pt-6"> <div class="container-fluid"> <div class="mb-npx"> <div class="row align-items-center"> <div class="col-sm-6 col-12 mb-4 mb-sm-0"> <!-- Title --> <h1 class="h2 mb-0 ls-tight">Application</h1> </div> <!-- Actions --> <div class="col-sm-6 col-12 text-sm-end"> <div class="mx-n1"> <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1"> <span class=" pe-2"> <i class="bi bi-pencil"></i> </span> <span>Edit</span> </a> <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1"> <span class=" pe-2"> <i class="bi bi-plus"></i> </span> <span>Create</span> </a> </div> </div> </div> <!-- Nav --> <ul class="nav nav-tabs mt-4 overflow-x border-0"> <li class="nav-item "> <a href="#" class="nav-link active">All files</a> </li> <li class="nav-item"> <a href="#" class="nav-link font-regular">Shared</a> </li> <li class="nav-item"> <a href="#" class="nav-link font-regular">File requests</a> </li> </ul> </div> </div> </header> <!-- Main --> <main class="py-6 bg-surface-secondary"> <div class="container-fluid"> <!-- Card stats --> <div class="row g-6 mb-6"> <div class="col-xl-3 col-sm-6 col-12"> <div class="card shadow border-0"> <div class="card-body"> <div class="row"> <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">Budget</span> <span class="h3 font-bold mb-0">$750.90</span> </div> <div class="col-auto"> <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle"> <i class="bi bi-credit-card"></i> </div> </div> </div> <div class="mt-2 mb-0 text-sm"> <span class="badge badge-pill bg-soft-success text-success me-2"> <i class="bi bi-arrow-up me-1"></i>13% </span> <span class="text-nowrap text-xs text-muted">Since last month</span> </div> </div> </div> </div> <div class="col-xl-3 col-sm-6 col-12"> <div class="card shadow border-0"> <div class="card-body"> <div class="row"> <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">New projects</span> <span class="h3 font-bold mb-0">215</span> </div> <div class="col-auto"> <div class="icon icon-shape bg-primary text-white text-lg rounded-circle"> <i class="bi bi-people"></i> </div> </div> </div> <div class="mt-2 mb-0 text-sm"> <span class="badge badge-pill bg-soft-success text-success me-2"> <i class="bi bi-arrow-up me-1"></i>30% </span> <span class="text-nowrap text-xs text-muted">Since last month</span> </div> </div> </div> </div> <div class="col-xl-3 col-sm-6 col-12"> <div class="card shadow border-0"> <div class="card-body"> <div class="row"> <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total hours</span> <span class="h3 font-bold mb-0">1.400</span> </div> <div class="col-auto"> <div class="icon icon-shape bg-info text-white text-lg rounded-circle"> <i class="bi bi-clock-history"></i> </div> </div> </div> <div class="mt-2 mb-0 text-sm"> <span class="badge badge-pill bg-soft-danger text-danger me-2"> <i class="bi bi-arrow-down me-1"></i>-5% </span> <span class="text-nowrap text-xs text-muted">Since last month</span> </div> </div> </div> </div> <div class="col-xl-3 col-sm-6 col-12"> <div class="card shadow border-0"> <div class="card-body"> <div class="row"> <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">Work load</span> <span class="h3 font-bold mb-0">95%</span> </div> <div class="col-auto"> <div class="icon icon-shape bg-warning text-white text-lg rounded-circle"> <i class="bi bi-minecart-loaded"></i> </div> </div> </div> <div class="mt-2 mb-0 text-sm"> <span class="badge badge-pill bg-soft-success text-success me-2"> <i class="bi bi-arrow-up me-1"></i>10% </span> <span class="text-nowrap text-xs text-muted">Since last month</span> </div> </div> </div> </div> </div> <div class="card shadow border-0 mb-7"> <div class="card-header"> <h5 class="mb-0">Applications</h5> </div> <div class="table-responsive"> <table class="table table-hover table-nowrap"> <thead class="thead-light"> <tr> <th scope="col">Name</th> <th scope="col">Date</th> <th scope="col">Company</th> <th scope="col">Offer</th> <th scope="col">Meeting</th> <th></th> </tr> </thead> <tbody> <tr> <td> <img alt="..." src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Robert Fox </a> </td> <td> Feb 15, 2021 </td> <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-1.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Dribbble </a> </td> <td> $3.500 </td> <td> <span class="badge badge-lg badge-dot"> <i class="bg-success"></i>Scheduled </span> </td> <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td> </tr> <tr> <td> <img alt="..." src="https://images.unsplash.com/photo-1610271340738-726e199f0258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Darlene Robertson </a> </td> <td> Apr 15, 2021 </td> <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-2.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Netguru </a> </td> <td> $2.750 </td> <td> <span class="badge badge-lg badge-dot"> <i class="bg-warning"></i>Postponed </span> </td> <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td> </tr> <tr> <td> <img alt="..." src="https://images.unsplash.com/photo-1610878722345-79c5eaf6a48c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Theresa Webb </a> </td> <td> Mar 20, 2021 </td> <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-3.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Figma </a> </td> <td> $4.200 </td> <td> <span class="badge badge-lg badge-dot"> <i class="bg-success"></i>Scheduled </span> </td> <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td> </tr> <tr> <td> <img alt="..." src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Kristin Watson </a> </td> <td> Feb 15, 2021 </td> <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-4.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Mailchimp </a> </td> <td> $3.500 </td> <td> <span class="badge badge-lg badge-dot"> <i class="bg-dark"></i>Not discussed </span> </td> <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td> </tr> <tr> <td> <img alt="..." src="https://images.unsplash.com/photo-1608976328267-e673d3ec06ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Cody Fisher </a> </td> <td> Apr 10, 2021 </td> <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-5.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Webpixels </a> </td> <td> $1.500 </td> <td> <span class="badge badge-lg badge-dot"> <i class="bg-danger"></i>Canceled </span> </td> <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td> </tr> <tr> <td> <img alt="..." src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Robert Fox </a> </td> <td> Feb 15, 2021 </td> <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-1.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Dribbble </a> </td> <td> $3.500 </td> <td> <span class="badge badge-lg badge-dot"> <i class="bg-success"></i>Scheduled </span> </td> <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td> </tr> <tr> <td> <img alt="..." src="https://images.unsplash.com/photo-1610271340738-726e199f0258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Darlene Robertson </a> </td> <td> Apr 15, 2021 </td> <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-2.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Netguru </a> </td> <td> $2.750 </td> <td> <span class="badge badge-lg badge-dot"> <i class="bg-warning"></i>Postponed </span> </td> <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td> </tr> <tr> <td> <img alt="..." src="https://images.unsplash.com/photo-1610878722345-79c5eaf6a48c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Theresa Webb </a> </td> <td> Mar 20, 2021 </td> <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-3.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Figma </a> </td> <td> $4.200 </td> <td> <span class="badge badge-lg badge-dot"> <i class="bg-success"></i>Scheduled </span> </td> <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td> </tr> <tr> <td> <img alt="..." src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Kristin Watson </a> </td> <td> Feb 15, 2021 </td> <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-4.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Mailchimp </a> </td> <td> $3.500 </td> <td> <span class="badge badge-lg badge-dot"> <i class="bg-dark"></i>Not discussed </span> </td> <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td> </tr> <tr> <td> <img alt="..." src="https://images.unsplash.com/photo-1608976328267-e673d3ec06ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Cody Fisher </a> </td> <td> Apr 10, 2021 </td> <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-5.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Webpixels </a> </td> <td> $1.500 </td> <td> <span class="badge badge-lg badge-dot"> <i class="bg-danger"></i>Canceled </span> </td> <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td> </tr> </tbody> </table> </div> <div class="card-footer border-0 py-5"> <span class="text-muted text-sm">Showing 10 items out of 250 results found</span> </div> </div> </div> </main> </div>
    </div>



        <br/>
        <div class="container bg-light">
            <div class="table-wrap table-responsive">
                <table class="table table-borderless">
                    <thead>
                        <tr class="p-0">
                            <td class="w350 p-0" scope="col">
                                <small class="  btn btn-primary h-1 px-2">ISSUES FOUND</small>
                            </td>
                            <td class="text-center w100 p-0 py-2" scope="col"><small class="text-muted">ASSIGNEE</small>
                            </td>
                            <td class="text-center w100 p-0 py-2" scope="col"><small class="text-muted">DUE DATE</small>
                            </td>
                            <td class="text-center w100 p-0 py-2" scope="col"><small class="text-muted">STAGE</small></td>
                            <td class="text-center w100 p-0 py-2" scope="col"><small class="text-muted">PRIORITY</small>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-bottom bg-white">
                            <td class="row">
                                <div class="d-flex align-items-center">
                                    <span class="bg-pink mx-2"></span>
                                    <span>Update contractor agreement</span>
                                </div>
                            </td>
                            <td class="text-center"><img
                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                                    class="rounded-circle" alt=""></td>
                            <td class="text-center"><span class="bi bi-calendar2-month"></span>
                                </td>
                            <td class="text-center"><span class="btn btn-secondary pink">INITIATION</span>
                            </td>
                            <td class="text-center"><span class="far fa-flag text-muted"></span></td>
                        </tr>
                        <tr class="border-bottom bg-white">
                            <td class="row">
                                <div class="d-flex align-items-center">
                                    <span class="bg-pink mx-2"></span>
                                    <span>Plan for next year</span>
                                </div>
                            </td>
                            <td class="text-center"><img
                                    src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                                    class="rounded-circle" alt=""></td>
                            <td class="text-center"><span class="far fa-calendar-alt text-muted"></span></td>
                            <td class="text-center"><span class="btn btn-secondary pink">INITIATION</span>
                            </td>
                            <td class="text-center"><span class="far fa-flag text-muted"></span></td>
                        </tr>
                        <tr class="border-bottom bg-white">
                            <td class="row">
                                <div class="d-flex align-items-center">
                                    <span class="bg-pink mx-2"></span>
                                    <span>How to manage event planing</span>
                                </div>
                            </td>
                            <td class="text-center"><img
                                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjJ8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                                    class="rounded-circle" alt=""></td>
                            <td class="text-center"><span class="far fa-calendar-alt text-muted"></span></td>
                            <td class="text-center"><span class="btn btn-secondary violet">PLANNING</span>
                            </td>
                            <td class="text-center"><span class="far fa-flag text-muted"></span></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-borderless">
                    <thead>
                        <tr class="p-0">
                            <td class="w350 p-0" scope="col">
                                <small class=" btn btn-primary h-2 px-2">REVIEW</small>
                            </td>
                            <td class="text-center w100 p-0 py-2" scope="col">
                            </td>
                            <td class="text-center w100 p-0 py-2" scope="col">
                            </td>
                            <td class="text-center w100 p-0 py-2" scope="col"></td>
                            <td class="text-center w100 p-0 py-2" scope="col"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-bottom bg-white">
                            <td class="row">
                                <div class="d-flex align-items-center">
                                    <span class="bg-yellow mx-2"></span>
                                    <span>Budget assessment</span>
                                    <span class="mx-2 text-muted">3</span>
                                    <span class="far fa-comment-alt text-muted"></span>
                                </div>
                            </td>
                            <td class="text-center">
                                <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjd8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                                    class="rounded-circle" alt="">
                            </td>
                            <td class="text-center"><span class="far fa-calendar-alt text-muted"></span></td>
                            <td class="text-center"><span class="btn btn-secondary violet">PLANNING</span>
                            </td>
                            <td class="text-center"><span class="far fa-flag text-muted"></span></td>
                        </tr>
                        <tr class="border-bottom bg-white">
                            <td class="row">
                                <div class="d-flex align-items-center">
                                    <span class="bg-yellow mx-2"></span>
                                    <span>Finalize project scope</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDN8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                                    class="rounded-circle" alt="">
                            </td>
                            <td class="text-center"><span class="far fa-calendar-alt text-muted"></span></td>
                            <td class="text-center "><span class="btn btn-secondary yellow">EXECUTION</span>
                            </td>
                            <td class="text-center"><span class="far fa-flag text-muted"></span></td>
                        </tr>
                        <tr class="border-bottom bg-white">
                            <td class="row">
                                <div class="d-flex align-items-center">
                                    <span class="bg-yellow mx-2"></span>
                                    <span>Gather key resources</span>
                                    <span class="text-muted ps-2">+4</span>
                                    <span class="text-muted fas fa-tag ps-1"></span>
                                    <span class="text-muted ps-2">5</span>
                                    <span class="text-muted fas fa-paperclip ps-1"></span>
                                </div>
                            </td>
                            <td class="text-center">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDR8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                                    class="rounded-circle" alt="">
                            </td>
                            <td class="text-center"><span class="far fa-calendar-alt text-muted"></span></td>
                            <td class="text-center "><span class="btn btn-secondary pink">INITIATION</span>
                            </td>
                            <td class="text-center"><span class="far fa-flag text-muted"></span></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-borderless">
                    <thead>
                        <tr class="p-0">
                            <td class="w350 p-0" scope="col"> <small class=" btn btn-primary h-3 px-2">ISSUES
                                    FOUND</small>
                            </td>
                            <td class="text-center w100 p-0 py-2" scope="col">
                            </td>
                            <td class="text-center w100 p-0 py-2" scope="col"><small class="text-muted"></small>
                            </td>
                            <td class="text-center w100 p-0 py-2" scope="col"><small class="text-muted"></small></td>
                            <td class="text-center w100 p-0 py-2" scope="col"><small class="text-muted"></small>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-bottom bg-white">
                            <td class="row">
                                <div class="d-flex align-items-center">
                                    <span class="bg-violet mx-2"></span>
                                    <span>New contractor agreement</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <img src="https://images.unsplash.com/photo-1544723795-3fb6469f5b39?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDZ8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                                    class="rounded-circle" alt="">
                            </td>
                            <td class="text-center"><span class="far fa-calendar-alt text-muted"></span></td>
                            <td class="text-center"><span class="btn btn-secondary w-100 violet">PLANNING</span>
                            </td>
                            <td class="text-center"><span class="far fa-flag text-muted"></span></td>
                        </tr>
                        <tr class="border-bottom bg-white">
                            <td class="row">
                                <div class="d-flex align-items-center">
                                    <span class="bg-violet mx-2"></span>
                                    <span>Refresh company website</span>
                                </div>
                            </td>
                            <td class="text-center"><img
                                    src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTJ8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                                    class="rounded-circle" alt=""></td>
                            <td class="text-center"><span class="far fa-calendar-alt text-muted"></span></td>
                            <td class="text-center "><span class="btn btn-secondary yellow">EXECUTION</span>
                            </td>
                            <td class="text-center"><span class="far fa-flag text-muted"></span></td>
                        </tr>
                        <tr class="border-bottom bg-white">
                            <td class="row">
                                <div class="d-flex align-items-center">
                                    <span class="bg-violet mx-2"></span>
                                    <span>Update key objectives</span>
                                    <span class="text-muted ps-2 pe-1">5</span>
                                    <span class="fas fa-paperclip text-muted"></span>
                                </div>
                            </td>
                            <td class="text-center"><img
                                    src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTZ8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
                                    class="rounded-circle" alt=""></td>
                            <td class="text-center"><span class="far fa-calendar-alt text-muted"></span></td>
                            <td class="text-center"><span class="btn btn-secondary pink">INITIATION</span>
                            </td>
                            <td class="text-center"><span class="far fa-flag text-muted"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </body>
</html>