<html>
    <head>
    @stack('before-styles')
        
        <!-- Favicons -->
        <link href="{{ asset('office/assets/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('office/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css
        https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js
        https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js
        https://use.fontawesome.com/releases/v5.7.2/css/all.css



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
    </head>

    <body>
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
                            <td class="text-center"><span class="far fa-calendar-alt text-muted"></span></td>
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