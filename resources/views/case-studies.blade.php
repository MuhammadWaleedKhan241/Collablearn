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
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href={{asset('libs/owl.carousel/dist/asset/owl.carousel.min.css')}}>
  <link rel="stylesheet" href={{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css')}}
    integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

  <!-- Core Css -->
  {{--
  <link id="themeColors" rel="stylesheet" href={{asset('css/style.min.css')}} />
  <script src={{asset('https://cdn.tailwindcss.com')}}></script>

  <!--  Favicon -->
  <link rel="shortcut icon" type="image/png" href={{asset('images/logos/favicon.ico')}} />
  <link id="themeColors" rel="stylesheet" href={{asset('css/style.min.css')}} /> --}}
  {{--
  <link rel="shortcut icon" type="image/png" href="{{asset('images/logos/favicon.ico')}}" /> --}}
  <!-- Core Css -->
  {{--
  <link id="themeColors" rel="stylesheet" href={{asset('css/style.min.css')}} /> --}}
  <link href={{asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css')}} rel="stylesheet">

  <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css')}}">

  <link href={{asset('//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}} />

  <link rel="stylesheet" href={{asset('https://unpkg.com/leaflet/dist/leaflet.css')}} />
  <link rel="stylesheet" href={{asset('css/style.min.css')}}>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include('navlayout')

    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">

        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>

          </ul>
          <div class="d-block d-lg-none">
            <img src={{asset('images/logos/dark-logo.png')}} class="dark-logo" width="180" alt="" />
            <img src={{asset('images/logos/light-logo.png')}} class="light-logo" width="180" alt="" />
          </div>
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
      <!--  Header End -->
      <div class="container-fluid">
        <p class="fs-6 fw-bolder">Case Studies</p>
        <div class=" shadow-none mt-9 mb-0">
          <div class="table-responsive">
            <table class="table text-nowrap align-middle mb-0">
              <thead>
                <tr>
                  <th class="ps-0 fs-4 fw-semibold">Session</th>
                  <th class="fw-semibold fs-4">Title</th>
                  <th class="fw-semibold fs-4">File</th>
                  <th class="fw-semibold fs-4">By</th>
                  <th class="fw-semibold fs-4">Comments</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <span>2023</span>
                  </td>
                  <td>
                    <span> Language,political discourse Language</span>
                  </td>
                  <td>
                    <a href="#">Download file</a>
                  </td>
                  <td>
                    <h5><b>Smith</b></h5>
                  </td>
                  <td>
                    <a href="{{route('admin.comment')}}" class="btn btn-outline-success"><i
                        class="bi bi-chat-square-dots fs-5"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--  Customizer -->
  <!--  Import Js Files -->
  <script src={{asset('libs/jquery/dist/jquery.min.js')}}></script>
  <script src={{asset('libs/simplebar/dist/simplebar.min.js')}}></script>
  <script src={{asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}></script>
  <!--  core files -->
  <script src={{asset ('js/app.min.js')}}></script>
  <script src={{asset ('js/app.init.js')}}assets></script>
  <script src={{asset ('js/app-style-switcher.js')}}></script>
  <script src={{asset ('js/sidebarmenu.js')}}></script>
  <script src={{asset ('js/custom.js')}}></script>
  <!--  current page js files -->
  <script src={{asset ('libs/owl.carousel/dist/owl.carousel.min.js')}}></script>
  <script src={{asset ('libs/apexcharts/dist/apexcharts.min.js')}}></script>
  <script src={{asset ('js/dashboard.js')}}></script>
  <script src={{asset('libs/apexcharts/dist/apexcharts.min.js')}}></script>
  <script src={{asset('js/dashboard4.js')}}></script>
</body>

</html>