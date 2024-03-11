<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>Collab learn</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="NettaAdSoka" />
    <meta name="author" content="" />
    <meta name="keywords" content="NettaAdSoka" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    {{--
    <link rel="stylesheet"
        href={{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css')}}
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href={{asset('assets/images/logos/favicon.ico')}} />
    <link id="themeColors" rel="stylesheet" href={{asset('assets/css/style.min.css')}} />
    <link id="themeColors" rel="stylesheet" href={{asset('css/style.min.css')}} />

    <link href={{asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css')}} rel="stylesheet">

    <script src={{asset('https://cdn.tailwindcss.com')}}></script>
    <link href={{asset('//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}} />

    <link rel="stylesheet" href={{asset('https://unpkg.com/leaflet/dist/leaflet.css')}} />
    <link rel="stylesheet" href={{asset('css/style.min.css')}}> --}}
    <link rel="shortcut icon" type="image/png" href="{{asset('images/logos/favicon.ico')}}" />
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href={{asset('css/style.min.css')}} />
    <link href={{asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css')}} rel="stylesheet">

    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css')}}">

    <link href={{asset('//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}} />

    <link rel="stylesheet" href={{asset('https://unpkg.com/leaflet/dist/leaflet.css')}} />
    <link rel="stylesheet" href={{asset('css/style.min.css')}}>

</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="manage-student.html" class="text-nowrap logo-img">
                        <!-- <img src="assets/images/logos/dark-logo.png" class="dark-logo" width="180" alt="" /> -->
                        <img src="assets/images/logos/light-logo.png" class="light-logo" width="180" alt="" />
                    </a>
                    <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8 text-muted"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Resources</span>
                        </li>
                    </ul>
                </nav>
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
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <div class="d-flex align-items-center justify-content-between">
                            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                                <li class="nav-item dropdown">
                                    <a class="nav-link pe-0" href="" id="drop" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <div class="user-profile-img">
                                                <img src={{asset('images/profile/user-1.jpg')}} class="rounded-circle"
                                                    width="35" height="35" alt="">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up w-25"
                                        aria-labelledby="drop1">
                                        <div class="profile-dropdown position-relative" data-simplebar>
                                            <div class="message-body">
                                                <!-- Link to the user's profile -->
                                                <a href="{{ route('admin.profile.show') }}"
                                                    class="py-8 px-7 mt-8 d-flex align-items-center">My Profile</a>

                                                <!-- Link to change password page -->
                                                <a href="{{ route('admin.password.change') }}"
                                                    class="py-8 px-7 d-flex align-items-center">Change
                                                    Password</a>

                                                <!-- Logout form -->
                                                <form action="{{ route('admin.logout') }}" method="POST">
                                                    @csrf

                                                    <button type="submit"
                                                        class="py-8 px-7 mt-8 d-flex align-items-center">Log
                                                        Out</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- Header End -->
            <div class="container-fluid">
                <div>
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <!-- <a class="navbar-brand" href="#">Student</a> -->
                            <a href="{{route('admin.managesession')}}" class="btn btn-outline-success round-10"><i
                                    class="bi bi-arrow-left fs-5">
                                </i><b>2023: 1234</b>
                            </a>
                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Add Resource
                            </button>

                        </div>

                    </nav>
                </div>
                <div class="card shadow-none mt-9 mb-0">
                    <div class="table-responsive">
                        <table class="table text-nowrap align-middle mb-0">
                            <thead>
                                <tr>
                                    <th class="ps-0 fw-bolder fs-4">#</th>
                                    <th class="fw-bolder fs-4">File Title</th>
                                    <th class="fw-bolder fs-4">File Name</th>
                                    <th class="fw-bolder fs-4">Added on</th>
                                </tr>
                            </thead>
                            <tbody class="text-dark">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bolder" id="exampleModalLabel">New Resource
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form>
                        <div class="row">
                            <div class="mb-3 ">
                                <label for="inputEmail4" class="form-label fs-4">File
                                    Title</label>
                                <input type="text" class="form-control" id="inputEmail4" required>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label fs-4">Add
                                    File</label>
                                <input class="form-control" type="file" id="formFile" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Add</button>
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Customizer -->
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
    <script src={{asset('assets/js/dashboard4.js')}}></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>