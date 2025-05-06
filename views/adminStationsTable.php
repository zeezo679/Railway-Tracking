<?php
$notifications = $_SESSION['notifications'] ?? [];
?>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  
  <!-- CSS Files -->
  <link id="pagestyle" href="/assets/Admin_Template/assets/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Stations</h6>
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
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link text-white position-relative" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-bell fa-lg"></i>
                <span class="position-absolute top-10 start-200 translate-middle badge rounded-pill bg-danger">
                  <?= count($notifications) ?>
                </span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end bg-dark text-white" aria-labelledby="notificationDropdown" style="min-width: 500px;">
                <li class="dropdown-header text-white fw-bold">Notifications</li>
                <li><hr class="dropdown-divider bg-secondary"></li>
                <?php if (count($notifications) === 0) : ?>
                  <li class="text-center">
                    <a class="dropdown-item text-warning" href="#">
                      <strong>No Notifications</strong>
                    </a>
                  </li>
                <?php else : ?>
                  <?php foreach ($notifications as $notification) : ?>
                    <li class="d-flex justify-content-between align-items-start px-2 py-1">
                      <div class="flex-grow-1 pe-2">
                        <a class="dropdown-item text-success p-0" href="#">
                          <small>
                            <strong><?= $notification["title"] ?></strong><br>
                            <span class="text-warning"><?= $notification["message"] ?></span>
                          </small>
                        </a>
                      </div>
                      <a class="text-danger" href="/dismiss/notification/<?= $notification['id'] ?>" title="Dismiss notification">
                        <i class="fas fs-4 fa-times"></i>
                      </a>
                    </li>
                  <?php endforeach; ?>
                <?php endif; ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="d-flex justify-content-between align-items-center card-header pb-0">
              <h6>Authors table</h6>
              <button data-bs-toggle="modal" 
                      data-bs-target="#addStationModal" class="btn btn-sm btn-outline-primary">
                      + ADD
              </button>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                <thead>
                <tr>
                    <th class="text-dark text-s fw-bold">Station </th>
                    <th class="text-dark text-s fw-bold ps-2">City</th>
                    <th class="text-center text-dark text-s fw-bold">Station Code</th>
                    <th class="text-dark text-s fw-bold ps-2">Station Type</th>
                    <th class="text-dark text-s fw-bold ps-2">Create at</th>
                    <th class="text-center text-dark text-s fw-bold">Platform Count</th>
                    <th class="text-center text-dark text-s fw-bold">Status</th>
                    <th class="text-dark">Actions</th>
                </tr>

                </thead>
                  <tbody>
                    <?php foreach($stations as $station) :?>
                      <tr class="<?= $station["station_type"] !== "Sub" ? "bg-info-subtle":" bg-dark-subtle" ?>">
                        <td >
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img width="150" src="/assets/Admin_Template/assets/img/station<?= random_int(1,4)?>.jpg" class="avatar avatar-sm me-3" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm"><?= $station["station_name"] ?></h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0"><?= $station["city"] ?></p>
                        </td>
                        <td >
                          <p class="text-xs text-center font-weight-bold mb-0"><?= $station["station_code"] ?></p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-<?= $station["station_type"] === "Main"? "success": "secondary"?>"><?= $station["station_type"]?></span>
                        </td>
                        <td >
                          <p class="text-xs text-danger text-center fw-bold mb-0"> <?=( new DateTime($station["created_at"]))->format(("Y-m-d"))?> </p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs text-dark text-center fw-bold mb-0"><?= $station["platform_count"]?></span>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-<?= $station["status"] === "active"? "primary": "danger"?>"><?= $station["status"]?></span>
                        </td>
                        <td class="align-middle text-start">
                        <a href="#" 
                          class="edit-station-link me-3" 
                          data-id="<?= $station['id'] ?>"
                          data-station_name="<?= $station['station_name'] ?>"
                          data-station_type="<?= $station['station_type'] ?>"
                          data-created_at="<?= $station['created_at'] ?>"
                          data-city="<?= $station['city'] ?>"
                          data-status="<?= $station['status'] ?>"
                          data-station_code="<?= $station['station_code'] ?>"
                          data-platform_count="<?= $station['platform_count'] ?>"
                          data-bs-toggle="modal" 
                          data-bs-target="#editStationModal">
                          Edit
                        </a>
                          <a href="/delete/stations/?id=<?= $station['id'] ?>" 
                            class="text-danger font-weight-bold text-s" 
                            data-toggle="tooltip" 
                            title="Delete Station">
                          Delete
                          </a>
                        </td>

                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editStationModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
      <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content w-100">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Edit Station</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-4">
            <form method="POST" action="updateStation">

              <input type="hidden" id="modal-station-id" name="id" value="">
              <!-- table name -->
              <input type="hidden" id="tableName" name="table" value="stations">

              <div class="form-outline mb-3">
                <label class="form-label" for="modal-station_name">Station Name</label>
                <input type="text" id="modal-station_name" name="station_name" class="form-control" required />
              </div>

              <div class="form-outline mb-3">
                <label class="form-label" for="modal-city">City</label>
                <input type="text" id="modal-city" name="city" class="form-control" required />
              </div>

              <div class="form-outline mb-3">
                <label class="form-label" for="modal-station_code">Station Code</label>
                <input type="text" id="modal-station_code" name="station_code" class="form-control" required />
              </div>

              <div class="form-outline mb-3">
                <label class="form-label" for="modal-station_type">Station Type</label>
                <select class="form-select" id="modal-station_type" name="station_type" required>
                  <option value="Main">Main</option>
                  <option value="Sub">Sub</option>
                </select>
              </div>

              <div class="form-outline mb-3">
                <label class="form-label" for="modal-platform_count">Platform Count</label>
                <input type="number" id="modal-platform_count" name="platform_count" class="form-control" required />
              </div>

              <div class="form-outline mb-3">
                <label class="form-label d-block mt-1" for="modal-status">Status</label>
                <select class="form-select" id="modal-status" name="status" required>
                  <option value="active">Active</option>
                  <option value="inactive">Inactive</option>
                </select>
              </div>

              <div class="modal-footer">
                <button type="submit" name="savedChanges" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              </div>

            </form>
          </div>

        </div>
      </div>
    </div>

    <!-- Add Modal -->
        
    <div class="modal fade" id="addStationModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
      <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content w-100">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Add Station</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-4">
          <form method="POST" action="addStation">

              <input type="hidden" id="modal-station-id" name="id" value="">
              <input type="hidden" name="table" value="stations">

              
                <div class="form-outline mb-3 me-2" style="flex: 1;">
                  <label class="form-label" for="modal-station_name">Station Name</label>
                  <input type="text" placeholder="Enter Station Name" id="modal-station_name" name="station_name" class="form-control" required />
                </div>

                <div class="form-outline mb-3 ms-2" style="flex: 1;">
                  <label class="form-label" for="modal-station_code">Station Code</label>
                  <input type="text" placeholder="Enter Station Code" id="modal-station_code" name="station_code" class="form-control" required />
                </div>

              
                <div class="form-outline mb-3 me-2" style="flex: 1;">
                  <label class="form-label" for="modal-city">City</label>
                  <input type="text" placeholder="Enter City" id="modal-city" name="city" class="form-control" required />
                </div>

                <div class="form-outline mb-3 ms-2" style="flex: 1;">
                  <label class="form-label" for="modal-station_type">Station Type</label>
                  <select class="form-select" id="modal-station_type" name="station_type" required>
                    <option value="main">Main</option>
                    <option value="sub">Sub</option>
                  </select>
                </div>

              
                <div class="form-outline mb-3 me-2" style="flex: 1;">
                  <label class="form-label" for="modal-platform_count">Platform Count</label>
                  <input type="number" placeholder="Enter Number of Platforms" id="modal-platform_count" name="platform_count" class="form-control" required />
                </div>

                <div class="form-outline mb-3 ms-2" style="flex: 1;">
                  <label class="form-label" for="modal-status">Status</label>
                  <select class="form-select" id="modal-status" name="status" required>
                    <option value="active">Active</option>
                    <option value="not active">Not Active</option>
                  </select>
                </div>
              </div>

              <div class="modal-footer">
                <button type="submit" name="addNew" class="btn btn-primary">Add Station</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </main>
  
  <!-- fill Modal  -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const editLinks = document.querySelectorAll('.edit-station-link');

      editLinks.forEach(link => {
        link.addEventListener('click', function () {
          document.getElementById('modal-station-id').value = this.dataset.id;
          document.getElementById('modal-station_name').value = this.dataset.station_name;
          document.getElementById('modal-city').value = this.dataset.city;
          document.getElementById('modal-station_code').value = this.dataset.station_code;
          document.getElementById('modal-station_type').value = this.dataset.station_type;
          document.getElementById('modal-platform_count').value = this.dataset.platform_count;
          document.getElementById('modal-status').value = this.dataset.status;
        });
      });
    });
  </script>


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
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/assets/Admin_Template/assets/js/argon-dashboard.min.js?v=2.1.0"></script>
<!-- MDB JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>

</html>