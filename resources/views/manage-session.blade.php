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
  {{--
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link id="themeColors" rel="stylesheet" href="assets/css/style.min.css" />
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />


  <!--  Favicon -->
  <link rel="shortcut icon" type="image/png" href={{asset('images/logos/favicon.ico')}} />
  <!-- Core Css -->
  <link rel="stylesheet" href={{asset('libs/owl.carousel/dist/dist/assets/owl.carousel.min.css')}}>
  <!-- Core Css -->
  <link id="themeColors" rel="stylesheet" href={{asset('css/style.min.css')}} />
  --}}
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
  <!-- Preloader -->

  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('navlayout')
    <div class="body-wrapper">
      <!-- Header Start -->
      <header class="app-header bg-light">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>

          </ul>
          {{-- <div class="d-block d-lg-none">
            <img src="assets/images/logos/dark-logo.png" class="dark-logo" width="180" alt="" />
            <img src="assets/images/logos/light-logo.png" class="light-logo" width="180" alt="" />
          </div> --}}
          <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="p-2">
              <i class="ti ti-dots fs-7"></i>
            </span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="d-flex align-items-center justify-content-between">
              <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                <li class="nav-item dropdown">
                  <a class="nav-link pe-0" href="" id="drop" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="d-flex align-items-center">
                      <div class="user-profile-img">
                        <img src={{asset('images/profile/user-1.jpg')}} class="rounded-circle" width="35" height="35"
                          alt="">
                      </div>
                    </div>
                  </a>
                  <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up w-25"
                    aria-labelledby="drop1">
                    <div class="profile-dropdown position-relative" data-simplebar>
                      <div class="message-body">
                        <!-- Link to the user's profile -->
                        <a href="{{ route('admin.profile.show') }}" class="py-8 px-7 mt-8 d-flex align-items-center">My
                          Profile</a>

                        <!-- Link to change password page -->
                        <a href="{{ route('admin.password.change') }}"
                          class="py-8 px-7 d-flex align-items-center">Change
                          Password</a>

                        <!-- Logout form -->
                        <form action="{{ route('admin.logout') }}" method="POST">
                          @csrf

                          <button type="submit" class="py-8 px-7 mt-8 d-flex align-items-center">Log
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
        <div class="col-12">
          <div class="p-4">
            <div class="d-flex justify-content-between">
              <h5 class="card-title fw- bolder">Sessions</h5>
              <a href="{{route('admin.session.add-session')}}" type="button" class="btn btn-outline-success"> Add
                Session </a>
            </div>
            <div class="card shadow-none mt-9 mb-0">
              <div class="table-responsive">
                <table class="table text-nowrap align-middle mb-0 gap-3">
                  <thead>
                    <tr>
                      <th class="fs-4 fw-bolder">Year</th>
                      <th class="fs-4 fw-bolder">Code</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody class="text-dark ">
                    <tr>
                      <td>
                        <span class="fw-semibold">2023</span>
                      </td>
                      <td>
                        <span>1234</span>
                      </td>
                      <td>
                        <a href="{{route('admin.resource')}}" type="button"
                          class="btn btn-outline-success ">Resources</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Import Js Files -->
  <script src={{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js')}}
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script src={{asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js')}}
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>
  <script src={{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js')}}
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>



  <script src={{asset('libs/jquery/dist/jquery.min.js')}}></script>
  <script src={{asset('libs/simplebar/dist/simplebar.min.js')}}></script>
  <script src={{asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}></script>
  <!-- core files -->
  <script src={{asset('js/app.min.js')}}></script>
  <script src={{asset('js/app.init.js')}}></script>
  <script src={{asset('js/app-style-switcher.js')}}></script>
  <script src={{asset('js/sidebarmenu.js')}}></script>
  <script src={{asset('js/custom.js')}}></script>
  <!-- current page js files -->
  <script src={{asset('libs/owl.carousel/dist/assets/owl.carousel.min.css')}}></script>
  <script src={{asset('js/dashboard3.js')}}></script>
</body>

</html>