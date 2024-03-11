<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>Collab learn</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="NettaAdSoka" />
    <meta name="author" content="" />
    <meta name="keywords" content="NettaAdSoka" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.ico" />
    <link id="themeColors" rel="stylesheet" href={{asset('assets/css/style.min.css')}} />
    <link href={{asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css')}} rel="stylesheet">

    <script src={{asset('https://cdn.tailwindcss.com')}}></script>
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />

    <!-- Owl Carousel -->
    <link rel="stylesheet" href={{asset('assets/libs/owl.carousel/dist/assets/owl.carousel.min.css')}}>
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href={{asset('assets/css/style.min.css')}} />
    <link rel="stylesheet"
        href={{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css')}}
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <!-- --------------------------------------------------- -->
    <!-- Core Css -->
    <!-- --------------------------------------------------- -->
    <link id="themeColors" rel="stylesheet" href={{asset('assets/css/style.min.css')}} />
    <script src={{asset('https://cdn.tailwindcss.com')}}></script>
    <link href={{asset('//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}} />
    <link href={{asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css')}} rel="stylesheet">


    <link rel="shortcut icon" type="image/png" href="{{asset('images/logos/favicon.ico')}}" />
    <!-- Core Css -->
    {{--
    <link id="themeColors" rel="stylesheet" href="assets/css/style.min.css" /> --}}
    <link id="themeColors" rel="stylesheet" href={{asset('css/style.min.css')}} />
    {{--
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
    <link href={{asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css')}} rel="stylesheet">

    <script src={{asset('https://cdn.tailwindcss.com')}}></script>
    <link href={{asset('//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}} />

    {{--
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" /> --}}
    <link rel="stylesheet" href={{asset('https://unpkg.com/leaflet/dist/leaflet.css')}} />
    <link rel="stylesheet" href={{asset('css/style.min.css')}}>
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">

        </aside>
        <div class="body-wrapper">
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>
            <div class="container-fluid bg-light">

                <div class="container mt-3 ">
                    <div class="row justify-between align-items-center">

                        <form class="row g-3 col-12 m-auto bg-white rounded p-4">
                            <h1 class="fs-7 fw-bold">Add New Session</h1>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bolder">Session Code </label>
                                <input type="number" class="form-control" name="sessioncode" id="Sector_Experirnce">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bolder">Attribute 1</label>
                                <input type="text" class="form-control" name="attribute1" id="Sector_Experirnce">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bolder">Attribute 2 </label>
                                <input type="text" class="form-control" name="attribute2" id="Sector_Experirnce">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bolder">Attribute 3 </label>
                                <input type="text" class="form-control" name="attribute3" id="Sector_Experirnce">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bolder">Attribute 4 </label>
                                <input type="text" class="form-control" name="attribute4" id="Sector_Experirnce">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bolder">Attribute 5 </label>
                                <input type="text" class="form-control" name="attribute5" id="Sector_Experirnce">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Country Field
                                </label>
                            </div>
                            <div class="col-2 d-flex">
                                <button type="button" class="btn btn-outline-success mt-3 me-2 ">Submit</button>
                                <button type="button" class="btn btn-outline-danger mt-3 ">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Customizer -->
        <!-- Import Js Files -->
        <script src={{asset('assets/libs/jquery/dist/jquery.min.js')}}></script>
        <script src={{asset('assets/libs/simplebar/dist/simplebar.min.js')}}></script>
        <script src={{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}></script>
        <!-- core files -->
        <script src={{asset('assets/js/app.min.js')}}></script>
        <script src={{asset('assets/js/app.init.js')}}></script>
        <script src={{asset('assets/js/app-style-switcher.js')}}></script>
        <script src={{asset('assets/js/sidebarmenu.js')}}></script>
        <script src={{asset('assets/js/custom.js')}}></script>
        <!-- current page js files -->
        <script src={{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}></script>
        <script src={{asset('assets/js/dashboard2.js')}}></script>


</body>

</html>