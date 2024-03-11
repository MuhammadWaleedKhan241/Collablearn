<!DOCTYPE html>
<html lang="en">

<head>
  <!--  Title -->
  <title>Collablearn</title>
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
  <link id="themeColors" rel="stylesheet" href={{asset('css/style.min.css')}} />
  <link href={{asset('https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css')}} rel="stylesheet">

  <script src={{asset('https://cdn.tailwindcss.com ')}}></script>
  <link href={{asset(' //cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}} />

  <!--  Favicon -->
  {{--
  <link rel="shortcut icon" type="image/png" href={{asset('images/logos/favicon.ico')}} />
  <link id="themeColors" rel="stylesheet" href={{asset('css/style.min.css')}} />
  <link rel="stylesheet" href={{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css')}}
    integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script> --}}
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

  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('navlayout')

    <div class="body-wrapper">
      <!-- Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
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
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand fs-6 fw-semibold">Students</a>
            <button class="btn btn-outline-success" type="button" data-bs-toggle="modal"
              data-bs-target="#exampleModal1">Add New Student
            </button>
          </div>

        </nav>
      </div>
      <div class="widget-content searchable-container list">
        <div class="card card-body">
          <div class="table-responsive">
            <table class="table search-table align-middle text-nowrap">
              <thead class="header-item">
                <th>Name</th>
                <th>Session</th>
                <th>Action</th>
              </thead>
              <tbody>
                <!-- start row -->
                <tr class="search-items">
                  <td>
                    <div class="d-flex align-items-center">
                      <div>
                        <div class="user-meta-info">
                          <h6 class="user-name " data-name="Emma Adams">Emma Adams</h6>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="usr-email-addr" data-email="adams@mail.com">2024</span>
                  </td>
                  <td>
                    <div class="action-btn">
                      <a href="" class="text-info edit">
                        <i class="ti ti-edit fs-5 btn btn-outline-success"></i>
                      </a>
                      <a href="" class="text-dark delete ms-2 ">
                        <i class="ti ti-trash fs-5 btn btn-outline-danger"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                {{-- <tr class="search-items">
                  <td>
                    <div class="n-chk align-self-center text-center">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox2" />
                        <label class="form-check-label" for="checkbox2"></label>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="assets/images/profile/user-2.jpg" alt="avatar" class="rounded-circle" width="35" />
                      <div class="ms-3">
                        <div class="user-meta-info">
                          <h6 class="user-name mb-0" data-name="Olivia Allen">Olivia Allen</h6>
                          <span class="user-work fs-3" data-occupation="Web Designer">Web Designer</span>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="usr-email-addr" data-email="allen@mail.com">allen@mail.com</span>
                  </td>
                  <td>
                    <span class="usr-location" data-location="Sydney, Australia">Sydney, Australia</span>
                  </td>
                  <td>
                    <span class="usr-ph-no" data-phone="+91 (125) 450-1500">+91 (125) 450-1500</span>
                  </td>
                  <td>
                    <div class="action-btn">
                      <a href="javascript:void(0)" class="text-info edit">
                        <i class="ti ti-eye fs-5"></i>
                      </a>
                      <a href="javascript:void(0)" class="text-dark delete ms-2">
                        <i class="ti ti-trash fs-5"></i>
                      </a>
                    </div>
                  </td>
                </tr> --}}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Student Enrollment Form</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body ">
          <form class="row g-3 needs-validation" novalidate>
            <div class="d-flex">
              <div class="col-md-6 me-2  ">
                <label for="validationTooltip01" class="form-label">First name</label>
                <input type="text" class="form-control" id="validationTooltip01" value="" required>
                <div class="valid-tooltip">
                </div>
              </div>
              <div class="col-md-6 position-relative">
                <label for="validationTooltip02" class="form-label">Last name</label>
                <input type="text" class="form-control" id="validationTooltip02" value="" required>
                <div class="valid-tooltip">
                  Looks good!
                </div>
              </div>
            </div>
            <div class="d-flex">
              <div class="col-md-6 me-2 position-relative">
                <label for="validationTooltipUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                  <!-- <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span> -->
                  <input type="text" class="form-control" id="validationTooltipUsername"
                    aria-describedby="validationTooltipUsernamePrepend" required>
                  <div class="invalid-tooltip">
                    Please choose a unique and valid username.
                  </div>
                </div>
              </div>
              <div class="col-md-6 position-relative">
                <label for="validationTooltip03" class="form-label">Email</label>
                <input type="text" class="form-control" id="validationTooltip03" required>
                <div class="invalid-tooltip">
                  Please provide a valid city.
                </div>
              </div>
            </div>
            <div class="d-flex">
              <div class="col-md-6 me-2 position-relative">
                <label for="validationTooltipUsername" class="form-label">Roll No</label>
                <div class="input-group has-validation">
                  <!-- <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span> -->
                  <input type="text" class="form-control" id="validationTooltipUsername"
                    aria-describedby="validationTooltipUsernamePrepend" required>
                  <div class="invalid-tooltip">
                    Please choose a unique and valid username.
                  </div>
                </div>
              </div>
              <div class="col-md-6 me-2 position-relative">
                <label for="validationTooltip03" class="form-label">Phone</label>
                <input type="text" class="form-control" id="validationTooltip03" required>
                <div class="invalid-tooltip">
                  Please provide a valid city.
                </div>
              </div>
            </div>
            <div class="d-flex">
              <div class="col-md-6 me-2 position-relative">
                <label for="validationTooltipUsername" class="form-label">Password</label>
                <div class="input-group has-validation">
                  <!-- <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span> -->
                  <input type="text" class="form-control" id="validationTooltipUsername"
                    aria-describedby="validationTooltipUsernamePrepend" required>
                  <div class="invalid-tooltip">
                    Please choose a unique and valid username.
                  </div>
                </div>
              </div>
              <div class="col-md-6  position-relative">
                <label for="validationTooltip03" class="form-label">Confirm Password</label>
                <input type="text" class="form-control" id="validationTooltip03" required>
                <div class="invalid-tooltip">
                  Please provide a valid city.
                </div>
              </div>
            </div>
            <div class="d-flex">
              <div class="col-md-6 me-2 position-relative">
                <label for="validationTooltipUsername" class="form-label">Address 1</label>
                <div class="input-group has-validation">
                  <!-- <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span> -->
                  <input type="text" class="form-control" id="validationTooltipUsername"
                    aria-describedby="validationTooltipUsernamePrepend" required>
                  <div class="invalid-tooltip">
                    Please choose a unique and valid username.
                  </div>
                </div>
              </div>
              <div class="col-md-6 me-2 position-relative">
                <label for="validationTooltip03" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="validationTooltip03" required>
              </div>
            </div>
            <div class="d-flex">
              <div class="col-md-6 me-2">
                <label for="inputState" class="form-label">Country</label>
                <select id="inputState" class="form-select">
                  <option selected>Choose...</option>
                  <option>Pakistan</option>
                  <option>India</option>
                  <option>USA</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="inputState" class="form-label">City</label>
                <input type="text" class="form-control" id="validationTooltip03" required>
              </div>
            </div>
            <div class="d-flex">
              <div class="col-md-6 me-2">
                <label for="inputState" class="form-label">State/province</label>
                <input type="text" class="form-control" id="validationTooltip03" required>
              </div>
              <div class="col-md-6">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
            </div>
            <div class="d-flex">
              <div class="col-md-4 me-2">
                <label for="inputZip" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="inputZip">
              </div>
              <div class="col-md-4 me-2">
                <label for="formFile" class="form-label">Attach file</label>
                <input class="form-control" type="file" id="formFile">
              </div>
              <div class="col-md-4 ">
                <label for="formFile" class="form-label   ">Gender</label>
                <br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
              </div>
            </div>
            <div class="col-12 modal-footer">
              <button class="btn btn-outline-success" type="submit" data-bs-dismiss="modal">Add</button>
              <button class="btn btn-outline-danger" type="submit" data-bs-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Customizer -->
  <!-- Import Js Files -->
  <script src={{asset('libs/jquery/dist/jquery.min.js')}}></script>
  <script src={{asset('libs/simplebar/dist/simplebar.min.js')}}></script>
  <script src={{asset('libs/bootstrap/ist/js/bootstrap.bundle.min.js')}}></script>
  <!-- core files -->
  <script src={{asset('js/app.min.js')}}></script>
  <script src={{asset('js/app.init.js')}}></script>
  <script src={{asset('js/app-style-switcher.js')}}></script>
  <script src={{asset('js/sidebarmenu.js')}}></script>
  <script src={{asset('js/custom.js')}}></script>
  <!-- current page js files -->
  {{-- <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script> --}}
  <script src={{asset('js/dashboard4.js')}}></script>
  <script src="{{asset('js/Countries.js')}}"></script>

</body>

</html>