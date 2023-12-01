@extends('backend.layouts.nice')

@section('title', __('Members'))

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


    @section('content')
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

                <!-- Header --> 
                <header class="bg-surface-primary border-bottom pt-6">
                    <div class="container-fluid">
                        <div class="mb-npx">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                <!-- Title --> 
                                <h1 class="h2 mb-0 ls-tight">Application</h1>
                            </div>
                            <!-- Actions --> 
                            <div class="col-sm-6 col-12 text-sm-end">
                                <div class="mx-n1"> 
                                    <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1"> 
                                    <span class=" pe-2"> <i class="bi bi-pencil"></i> </span> 
                                    <span>Edit</span> 
                                    </a> 
                                    <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1"> 
                                    <span class=" pe-2"> <i class="bi bi-plus"></i> </span> 
                                    <span>Create</span> 
                                    </a> 
                                </div>
                            </div>
                        </div>
                        <!-- Nav --> 
                        <ul class="nav nav-tabs mt-4 overflow-x border-0">
                            <li class="nav-item "> 
                                <a href="#" class="nav-link active">All files</a> 
                            </li>
                            <li class="nav-item"> 
                                <a href="#" class="nav-link font-regular">Shared</a> 
                            </li>
                            <li class="nav-item"> 
                                <a href="#" class="nav-link font-regular">File requests</a> 
                            </li>
                        </ul>
                        </div>
                    </div>
                </header>
                <!-- Main --> 
                <main class="py-6 bg-surface-secondary">
                    <div class="container-fluid">
                    <!-- Card stats --> 
                    <div class="row g-6 mb-6">
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col"> 
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Budget</span> 
                                        <span class="h3 font-bold mb-0">$750.90</span> 
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle"> 
                                            <i class="bi bi-credit-card"></i> 
                                        </div>
                                    </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm"> 
                                    <span class="badge badge-pill bg-soft-success text-success me-2"> 
                                    <i class="bi bi-arrow-up me-1"></i>13% </span> 
                                    <span class="text-nowrap text-xs text-muted">Since last month</span> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col"> 
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">New projects</span> 
                                            <span class="h3 font-bold mb-0">215</span> 
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-primary text-white text-lg rounded-circle"> 
                                                <i class="bi bi-people"></i> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm"> 
                                    <span class="badge badge-pill bg-soft-success text-success me-2"> 
                                    <i class="bi bi-arrow-up me-1"></i>30% </span> 
                                    <span class="text-nowrap text-xs text-muted">Since last month</span> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col"> 
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total hours</span> 
                                        <span class="h3 font-bold mb-0">1.400</span> 
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-info text-white text-lg rounded-circle"> 
                                            <i class="bi bi-clock-history"></i> 
                                        </div>
                                    </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm"> 
                                    <span class="badge badge-pill bg-soft-danger text-danger me-2"> 
                                    <i class="bi bi-arrow-down me-1"></i>-5% </span> 
                                    <span class="text-nowrap text-xs text-muted">Since last month</span> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">Work load</span> <span class="h3 font-bold mb-0">95%</span> </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white text-lg rounded-circle"> <i class="bi bi-minecart-loaded"></i> </div>
                                    </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm"> <span class="badge badge-pill bg-soft-success text-success me-2"> <i class="bi bi-arrow-up me-1"></i>10% </span> <span class="text-nowrap text-xs text-muted">Since last month</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow border-0 mb-7">
                        <div class="card-header">
                            <h5 class="mb-0">Applications</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap">
                                <thead class="thead-light">
                                    <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Offer</th>
                                    <th scope="col">Meeting</th>
                                    <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td> <img alt="..." src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Robert Fox </a> </td>
                                    <td> Feb 15, 2021 </td>
                                    <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-1.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Dribbble </a> </td>
                                    <td> $3.500 </td>
                                    <td> <span class="badge badge-lg badge-dot"> <i class="bg-success"></i>Scheduled </span> </td>
                                    <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td>
                                    </tr>
                                    <tr>
                                    <td> <img alt="..." src="https://images.unsplash.com/photo-1610271340738-726e199f0258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Darlene Robertson </a> </td>
                                    <td> Apr 15, 2021 </td>
                                    <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-2.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Netguru </a> </td>
                                    <td> $2.750 </td>
                                    <td> <span class="badge badge-lg badge-dot"> <i class="bg-warning"></i>Postponed </span> </td>
                                    <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td>
                                    </tr>
                                    <tr>
                                    <td> <img alt="..." src="https://images.unsplash.com/photo-1610878722345-79c5eaf6a48c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Theresa Webb </a> </td>
                                    <td> Mar 20, 2021 </td>
                                    <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-3.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Figma </a> </td>
                                    <td> $4.200 </td>
                                    <td> <span class="badge badge-lg badge-dot"> <i class="bg-success"></i>Scheduled </span> </td>
                                    <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td>
                                    </tr>
                                    <tr>
                                    <td> <img alt="..." src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Kristin Watson </a> </td>
                                    <td> Feb 15, 2021 </td>
                                    <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-4.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Mailchimp </a> </td>
                                    <td> $3.500 </td>
                                    <td> <span class="badge badge-lg badge-dot"> <i class="bg-dark"></i>Not discussed </span> </td>
                                    <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td>
                                    </tr>
                                    <tr>
                                    <td> <img alt="..." src="https://images.unsplash.com/photo-1608976328267-e673d3ec06ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Cody Fisher </a> </td>
                                    <td> Apr 10, 2021 </td>
                                    <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-5.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Webpixels </a> </td>
                                    <td> $1.500 </td>
                                    <td> <span class="badge badge-lg badge-dot"> <i class="bg-danger"></i>Canceled </span> </td>
                                    <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td>
                                    </tr>
                                    <tr>
                                    <td> <img alt="..." src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Robert Fox </a> </td>
                                    <td> Feb 15, 2021 </td>
                                    <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-1.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Dribbble </a> </td>
                                    <td> $3.500 </td>
                                    <td> <span class="badge badge-lg badge-dot"> <i class="bg-success"></i>Scheduled </span> </td>
                                    <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td>
                                    </tr>
                                    <tr>
                                    <td> <img alt="..." src="https://images.unsplash.com/photo-1610271340738-726e199f0258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Darlene Robertson </a> </td>
                                    <td> Apr 15, 2021 </td>
                                    <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-2.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Netguru </a> </td>
                                    <td> $2.750 </td>
                                    <td> <span class="badge badge-lg badge-dot"> <i class="bg-warning"></i>Postponed </span> </td>
                                    <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td>
                                    </tr>
                                    <tr>
                                    <td> <img alt="..." src="https://images.unsplash.com/photo-1610878722345-79c5eaf6a48c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Theresa Webb </a> </td>
                                    <td> Mar 20, 2021 </td>
                                    <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-3.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Figma </a> </td>
                                    <td> $4.200 </td>
                                    <td> <span class="badge badge-lg badge-dot"> <i class="bg-success"></i>Scheduled </span> </td>
                                    <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td>
                                    </tr>
                                    <tr>
                                    <td> <img alt="..." src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Kristin Watson </a> </td>
                                    <td> Feb 15, 2021 </td>
                                    <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-4.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Mailchimp </a> </td>
                                    <td> $3.500 </td>
                                    <td> <span class="badge badge-lg badge-dot"> <i class="bg-dark"></i>Not discussed </span> </td>
                                    <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td>
                                    </tr>
                                    <tr>
                                    <td> <img alt="..." src="https://images.unsplash.com/photo-1608976328267-e673d3ec06ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Cody Fisher </a> </td>
                                    <td> Apr 10, 2021 </td>
                                    <td> <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-5.png" class="avatar avatar-xs rounded-circle me-2"> <a class="text-heading font-semibold" href="#"> Webpixels </a> </td>
                                    <td> $1.500 </td>
                                    <td> <span class="badge badge-lg badge-dot"> <i class="bg-danger"></i>Canceled </span> </td>
                                    <td class="text-end"> <a href="#" class="btn btn-sm btn-neutral">View</a> <button type="button" class="btn btn-sm btn-square btn-neutral text-danger-hover"> <i class="bi bi-trash"></i> </button> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer border-0 py-5"> <span class="text-muted text-sm">Showing 10 items out of 250 results found</span> 
                        </div>
                    </div>
                </div>
                </main>                  

        </div>

@endsection

