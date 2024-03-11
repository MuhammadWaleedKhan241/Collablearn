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
    <link rel="shortcut icon" type="image/png" href={{asset('assets/images/logos/favicon.ico')}} />
    <link id="themeColors" rel="stylesheet" href={{asset('assets/css/style.min.css')}} />
    <link href={{asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css')}} rel="stylesheet">

    <script src={{asset('https://cdn.tailwindcss.com')}}></script>
    <link href={{asset('//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}} />

    <!-- Owl Carousel -->
    <link rel="stylesheet" href={{asset('assets/libs/owl.carousel/dist/assets/owl.carousel.min.css')}}>
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href={{asset('assets/css/style.min.css')}} />
    <link rel="stylesheet" href="{{asset('libs/owl.carousel/dist/assets/owl.carousel.min.css')}}">
    <link id="themeColors" rel="stylesheet" href="{{asset('css/style.min.css')}}" />
    <link id="themeColors" rel="stylesheet" href="{{asset('css/style.min.css')}}" />
    <link href="{{asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('js/jquery-jvectormap-2.0.5.min.js')}}"></script>
    <script src="{{asset('https://cdn.tailwindcss.com')}}"></script>
    <link href="{{asset('//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}}" />
    
    <link rel="stylesheet" href="{{asset('https://unpkg.com/leaflet/dist/leaflet.css')}}" />
    <script src="{{asset('https://cdn.tailwindcss.com')}}"></script>
</head>

<body>
    <!-- Preloader -->
    {{-- <div class="preloader">
        <img src="assets/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div> --}}
    <!-- Preloader -->
    {{-- <div class="preloader">
        <img src="assets/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div> --}}
    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="manage-tutor.html  " class="text-nowrap logo-img">
                        <img src="assets/images/logos/dark-logo.png" class="dark-logo" width="180" alt="" />
                        <img src="assets/images/logos/light-logo.png" class="light-logo" width="180" alt="" />
                    </a>
                    <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8 text-muted"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                    <ul id="sidebarnav">
                        <!-- ============================= -->
                        <!-- Home -->
                        <!-- ============================= -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Add Session</span>
                        </li>
                        <!-- =================== -->
                        <!-- Dashboard -->
                        <!-- =================== -->
                       
                    </ul>
                </nav>
                <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
                    <div class="hstack gap-3">
                        <div class="john-img">
                            <img src="assets/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40"
                                alt="">
                        </div>
                        <div class="john-title">
                            <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                            <span class="fs-2 text-dark">Designer</span>
                        </div>
                        <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button"
                            aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                            <i class="ti ti-power fs-6"></i>
                        </button>
                    </div>
                </div>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- Sidebar End -->
        <!-- Main wrapper -->
        <div class="body-wrapper">
            <!-- Header Start -->
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
                <h1 class="fs-7 fw-bolder">New Session</h1>
                <div class="container mt-3 ">
                    <div class="row justify-between align-items-center">

                        <form class="row g-3 col-12 m-auto bg-white rounded p-4">

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bolder fs-3">Session Code </label>
                                <input type="number" class="form-control" name="sectorExperirnce"
                                    id="Sector_Experirnce">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bolder fs-3">Attribute 1</label>
                                <input type="text" class="form-control" name="sectorExperirnce"
                                    id="Sector_Experirnce">
                            </div>  
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bolder fs-3">Attribute 2 </label>
                                <input type="text" class="form-control" name="sectorExperirnce"
                                    id="Sector_Experirnce" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bolder fs-3">Attribute 3 </label>
                                <input type="text" class="form-control" name="sectorExperirnce"
                                    id="Sector_Experirnce" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bolder fs-3">Attribute 4 </label>
                                <input type="text" class="form-control" name="sectorExperirnce"
                                    id="Sector_Experirnce" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bolder fs-3">Attribute 5 </label>
                                <input type="text" class="form-control" name="sectorExperirnce"
                                    id="Sector_Experirnce" required>
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
            <!-- Customizer -->
            <!-- Import Js Files -->
            <script src="assets/libs/jquery/dist/jquery.min.js"></script>
            <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
            <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <!-- core files -->
            <script src="assets/js/app.min.js"></script>
            <script src="assets/js/app.init.js"></script>
            <script src="assets/js/app-style-switcher.js"></script>
            <script src="assets/js/sidebarmenu.js"></script>
            <script src="assets/js/custom.js"></script>
            <!-- current page js files -->
            <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
            <script src="assets/js/dashboard2.js"></script>
</body>

</html>