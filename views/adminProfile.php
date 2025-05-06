<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/Admin_Template/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets/Admin_Template/assets/img/favicon.png">
  <title>
    Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- CSS Files -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link id="pagestyle" href="/assets/Admin_Template/assets/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link id="pagestyle" href="/assets/css/adminProfile.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-dark position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="/assets/Admin_Template/assets/img/logo-ct-dark.png" width="26px" height="26px" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Creative Tim</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="admin">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-3" href="users">
              <i class="fas fa-user fa-5x text-primary-emphasis"></i>
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-3" href="trains">
            <i class="fas fa-train fa-5x text-primary-emphasis"></i>
            <span class="nav-link-text ms-1">Trains</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="stations">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Stations</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link ms-3" href="bookings">
            <i class="fas fa-ticket-simple fa-5x text-primary-emphasis"></i>
            <span class="nav-link-text ms-1">Booking</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="admin_Profile">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="/logout" class="dropdown-item ms-4 ps-2"><i class="fas fa-sign-out-alt " style="color: red;"></i> Log Out</a>
        </li>
      </ul>
    </div>

  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Profile</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Profile</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <i class="far fa-envelope fa-2x"></i>
            <small class="mx-1 fw-bold text-light"><?php echo $_SESSION["user"]["email"]; ?></small>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
              <img src="/assets/template/img/user_icon.jpg" alt="User" class="mx-3 rounded-circle me-2" width="30" height="30">
              <!-- User name -->
              <small><?php echo $_SESSION["user"]["firstName"]; ?></small>
              </a>
            </li>
            <li class="nav-item  d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container rounded bg-white mt-5 mb-5">
      <form method="POST" action="admin_Profile" class="row">
          <div class="col-md-3 border-right">
              <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?=$_SESSION["user"]["firstName"]?></span><span class="text-black-50"><?=$_SESSION["user"]["email"]?></span><span> </span></div>
          </div>
          <div class="col-md-5 border-right">
              <div class="p-3 py-5">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4 class="text-right">Profile Settings</h4>
                  </div>
                  <div class="row mt-2">
                      <div class="col-md-6"><label class="labels">First Name</label><input type="text" name="firstName" class="form-control" placeholder="first name" value="<?=isset($_SESSION["user"]["firstName"]) ?$_SESSION["user"]["firstName"]:"" ?>"></div>
                      <div class="col-md-6"><label class="labels">Last Name</label><input type="text"  name="lastName" class="form-control" value="<?=isset($_SESSION["user"]["lastName"]) ?$_SESSION["user"]["lastName"]:"" ?>" placeholder="surname"></div>
                  </div>
                  <div class="row mt-3">
                      <div class="col-md-12"><label class="labels">Mobile Number</label><input name="mobile" type="text" class="form-control" placeholder="enter phone number" value="<?=isset($_SESSION["user"]["mobile"]) ?$_SESSION["user"]["mobile"]:"" ?>"></div>
                      <div class="col-md-12"><label class="labels">Address Line 1</label><input name="address1" type="text" class="form-control" placeholder="enter address line 1" value="<?=isset($_SESSION["user"]["address1"]) ?$_SESSION["user"]["address1"]:"" ?>"></div>
                      <div class="col-md-12"><label class="labels">Address Line 2</label><input name="address2" type="text" class="form-control" placeholder="enter address line 2" value="<?=isset($_SESSION["user"]["address2"]) ?$_SESSION["user"]["address2"]:"" ?>"></div>
                      <div class="col-md-12"><label class="labels">Postcode</label><input name="postcode" type="text" class="form-control" placeholder="enter address line 2" value="<?=isset($_SESSION["user"]["postcode"]) ?$_SESSION["user"]["postcode"]:"" ?>"></div>
                      <div class="col-md-12"><label class="labels">State</label><input name="state" type="text" class="form-control" placeholder="enter address line 2" value="<?=isset($_SESSION["user"]["state"]) ?$_SESSION["user"]["state"]:"" ?>"></div>
                      <div class="col-md-12"><label class="labels">Area</label><input name="area" type="text" class="form-control" placeholder="enter address line 2" value="<?=isset($_SESSION["user"]["area"]) ?$_SESSION["user"]["area"]:"" ?>"></div>
                      <div class="col-md-12"><label class="labels">Email ID</label><input name="email" type="text" class="form-control" placeholder="enter email id" value="<?=isset($_SESSION["user"]["email"]) ?$_SESSION["user"]["email"]:"" ?>"></div>
                      <div class="col-md-12"><label class="labels">Education</label><input name="education" type="text" class="form-control" placeholder="education" value="<?=isset($_SESSION["user"]["education"]) ?$_SESSION["user"]["education"]:"" ?>"></div>
                  </div>
                  <div class="row mt-3">
                      <div class="col-md-6"><label class="labels">Country</label><input name="country" type="text" class="form-control" placeholder="country" value="<?=isset($_SESSION["user"]["country"]) ?$_SESSION["user"]["country"]:"" ?>"></div>
                      <div class="col-md-6"><label class="labels">State/Region</label><input name="region" type="text" class="form-control" value="" placeholder="state"></div>
                  </div>
                  <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="p-3 py-5">
                  <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                  <div class="col-md-12"><label class="labels">Experience in Designing</label><input name="exp" type="text" class="form-control" placeholder="experience" value="<?=isset($_SESSION["user"]["exp"]) ?$_SESSION["user"]["exp"]:"" ?>"></div> <br>
                  <div class="col-md-12"><label class="labels">Additional Details</label><input name="details" type="text" class="form-control" placeholder="additional details" value="<?=isset($_SESSION["user"]["details"]) ?$_SESSION["user"]["details"]:"" ?>"></div>
              </div>
          </div>
      </form>
    </div>
</div>
</div>
  </main>

  <!--   Core JS Files   -->
  <script src="/assets/Admin_Template/assets/js/core/popper.min.js"></script>
  <script src="/assets/Admin_Template/assets/js/core/bootstrap.min.js"></script>
  <script src="/assets/Admin_Template/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/assets/Admin_Template/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/assets/Admin_Template/assets/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>