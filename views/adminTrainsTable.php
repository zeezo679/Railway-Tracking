
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashbard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Trains</h6>
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
                      <a class="text-danger" href="/delete/notifications/?id=<?= $notification['id'] ?>" title="Delete notification">
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
                      data-bs-target="#addTrainModal" class="btn btn-sm btn-outline-primary">
                      + ADD
              </button>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class=" text-dark text-s fw-bold">Train</th>
                    <th class=" text-dark text-s fw-bold ps-2">departure</th>
                    <th class="text-center  text-dark text-s fw-bold">Arrival</th>
                    <th class=" text-dark text-s fw-bold ps-2">departure Time</th>
                    <th class="text-center  text-dark text-s fw-bold">Arrival Time</th>
                    <th class="text-center  text-dark text-s fw-bold">status</th>
                    <th class="text-center  text-dark text-s fw-bold">Class</th>
                    <th class="text-center  text-dark text-s fw-bold">Capacity</th>
                    <th class="text-center  text-dark text-s fw-bold">Available Seats</th>
                    <th class="text-dark">Actions</th>
                  </tr>
                </thead>
                  <tbody>
                    <?php foreach($trains as $train) :?>
                      <tr class="<?= $train["train_class"] !== "second" ? "bg-info-subtle":" bg-dark-subtle" ?>">
                        <td >
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img width="150" src="/assets/Admin_Template/assets/img/train<?= random_int(1,3)?>.jpg" class="avatar avatar-sm me-3" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm"><?= $train["train_number"] ?></h6>
                              <p class="text-xs text-secondary mb-0"><?= $train["train_name"] ?> , <?= $train["train_type"] ?></p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0"><?= $train["departure_station"] ?></p>
                          <p class="text-xs text-danger fw-bold mb-0"> <?=( new DateTime($train["departure_time"]))->format("Y-m-d")?> </p>
                        </td>
                        <td >
                          <p class="text-xs font-weight-bold mb-0"><?= $train["arrival_station"] ?></p>
                          <p class="text-xs text-danger fw-bold mb-0"> <?=( new DateTime($train["arrival_time"]))->format("Y-m-d")?> </p>
                        </td>
                        <td >
                          <p class="text-xs text-danger text-center fw-bold mb-0"> <?=( new DateTime($train["departure_time"]))->format(("h:i:s A"))?> </p>
                        </td>
                        <td >
                          <p class="text-xs text-danger text-center fw-bold mb-0"> <?=( new DateTime($train["arrival_time"]))->format("h:i:s A")?> </p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-<?= $train["status"] === "active"? "success": "danger"?>"><?= $train["status"]?></span>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-<?= $train["train_class"] === "first"? "primary": "warning"?>"><?= $train["train_class"]?></span>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-secondary text-sm font-weight-bold"><?= $train["train_capacity"]?></span>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-secondary text-sm font-weight-bold"><?= $train["available_seats"]?></span>
                        </td>
                        <td class="align-middle text-start">
                        <a href="#" 
                          class="edit-train-link me-3" 
                          data-id="<?= $train['id'] ?>"
                          data-train_number="<?= $train['train_number'] ?>"
                          data-train_name="<?= $train['train_name'] ?>"
                          data-train_type="<?= $train['train_type'] ?>"
                          data-departure_station="<?= $train['departure_station'] ?>"
                          data-arrival_station="<?= $train['arrival_station'] ?>"
                          data-departure_time="<?= $train['departure_time'] ?>"
                          data-arrival_time="<?= $train['arrival_time'] ?>"
                          data-train_capacity="<?= $train['train_capacity'] ?>"
                          data-status="<?= $train['status'] ?>"
                          data-train_class="<?= $train['train_class'] ?>"
                          data-available_seats="<?= $train['available_seats'] ?>"
                          data-bs-toggle="modal" 
                          data-bs-target="#editTrainModal">
                          Edit
                        </a>
                          <a href="/delete/trains/?id=<?= $train['id'] ?>" 
                            class="text-danger font-weight-bold text-s" 
                            data-toggle="tooltip" 
                            title="Delete train">
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
    <div class="modal fade" id="editTrainModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
      <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content w-100">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Edit Train</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-4">
            <form method="POST" action="updateTrain">
              
              <div class="d-flex justify-content-between align-item-center">
      
                <input type="hidden" id="modal-train-id" name="id" value="">
                <!-- table name -->
                <input type="hidden" id="tableName" name="table" value="trains">

                <div class="form-outline mb-3">
                  <label class="form-label" for="modal-train_name">Train Name</label>
                  <input type="text" value="" id="modal-train_name" name="train_name" class="form-control" required />
                </div>
                
                <div class="form-outline mb-3">
                  <label class="form-label" for="modal-train_number">Train Number</label>
                  <input type="number" value="" id="modal-train_number" name="train_number" class="form-control" required />
                </div>
                
              </div>

              <div class="d-flex justify-content-between align-item-center">
                <div class="form-outline mb-3">
                  <label class="form-label" for="modal-train_type">Train Type</label>
                  <input type="text" value="" id="modal-train_type" name="train_type" class="form-control" required />
                </div>
                
                <div class="form-outline mb-3">
                  <label class="form-label" for="modal-train_capacity">Train Capacity</label>
                  <input type="number" value="" id="modal-train_capacity" name="train_capacity" class="form-control" required />
                </div>
              </div>

              <div class="d-flex justify-content-between align-item-center">
                <div class="form-outline mb-3">
                  <label class="form-label" for="modal-departure_station">Departure Station</label>
                  <input type="text" value="" id="modal-departure_station" name="departure_station" class="form-control" required />
                </div>
                
                <div class="form-outline mb-3">
                  <label class="form-label" for="modal-arrival_station">Arrival Station</label>
                  <input type="text" value="" id="modal-arrival_station" name="arrival_station" class="form-control" required />
                </div>
              </div>
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-outline mb-3 me-2" style="flex: 1;">
                  <label class="form-label" for="modal-departure_time">Departure Time</label>
                  <input type="datetime-local" id="modal-departure_time" name="departure_time" class="form-control" required />
                </div>
              
                <div class="form-outline mb-3 ms-2" style="flex: 1;">
                  <label class="form-label" for="modal-arrival_time">Arrival Time</label>
                  <input type="datetime-local" id="modal-arrival_time" name="arrival_time" class="form-control" required />
                </div>
              </div>


              <div class="d-flex justify-content-between align-items-center">
                <div class="form-outline mb-3">
                  <label class="form-label" for="modal-available_seats">Available Seats</label>
                  <input type="number" value="" id="modal-available_seats" name="available_seats" class="form-control" required />
                </div>

                <div class="form-outline mb-3">
                  <label class="form-label d-block mt-1" for="status">Train Status</label>
                  <select class="form-select" id="modal-status" name="status" required>
                    <option value="active">Active</option>
                    <option value="not active">Not Active</option>
                  </select>
                </div>

                <div class="form-outline mb-3">
                  <label class="form-label d-block mt-1" for="train_class">Train Class</label>
                  <select class="form-select" id="modal-train_class" name="train_class" required>
                    <option value="first">First</option>
                    <option value="second">Second</option>
                  </select>
                </div>
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
        
    <div class="modal fade" id="addTrainModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
      <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content w-100">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Add Train</h5>
            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-4">
            <form method="POST" action="addTrain">
              
              <div class="d-flex justify-content-between align-item-center">
      
                <input type="hidden" id="modal-train-id" name="id" value="">
                <!-- table name -->
                <input type="hidden" id="tableName" name="table" value="trains">

                <div class="form-outline mb-3">
                  <label class="form-label" for="modal-train_name">Train Name</label>
                  <input type="text" placeholder="Enter Train Name" value="" id="modal-train_name" name="train_name" class="form-control" required />
                </div>
                
                <div class="form-outline mb-3">
                  <label class="form-label" for="modal-train_number">Train Number</label>
                  <input type="number" placeholder="Enter Train Number" value="" id="modal-train_number" name="train_number" class="form-control" required />
                </div>
                
              </div>

              <div class="d-flex justify-content-between align-item-center">
                <div class="form-outline mb-3">
                  <label class="form-label" for="modal-train_type">Train Type</label>
                  <input type="text" placeholder="Enter Train Type" value="" id="modal-train_type" name="train_type" class="form-control" required />
                </div>
                
                <div class="form-outline mb-3">
                  <label class="form-label" for="modal-train_capacity">Train Capacity</label>
                  <input type="number" placeholder="Enter Train Capacity" value="" id="modal-train_capacity" name="train_capacity" class="form-control" required />
                </div>
              </div>

              <div class="d-flex justify-content-between align-item-center">
                <div class="form-outline mb-3">
                  <label class="form-label" for="modal-departure_station">Departure Station</label>
                  <input type="text" placeholder="Enter Departure Station" value="" id="modal-departure_station" name="departure_station" class="form-control" required />
                </div>
                
                <div class="form-outline mb-3">
                  <label class="form-label" for="modal-arrival_station">Arrival Station</label>
                  <input type="text" placeholder="Enter Arrival Station" value="" id="modal-arrival_station" name="arrival_station" class="form-control" required />
                </div>
              </div>
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-outline mb-3 me-2" style="flex: 1;">
                  <label class="form-label" for="modal-departure_time">Departure Time</label>
                  <input type="datetime-local" id="modal-departure_time" name="departure_time" class="form-control" required />
                </div>
              
                <div class="form-outline mb-3 ms-2" style="flex: 1;">
                  <label class="form-label" for="modal-arrival_time">Arrival Time</label>
                  <input type="datetime-local" id="modal-arrival_time" name="arrival_time" class="form-control" required />
                </div>
              </div>


              <div class="d-flex justify-content-between align-items-center">
                <div class="form-outline mb-3">
                  <label class="form-label" for="modal-available_seats">Available Seats</label>
                  <input type="number" placeholder="Enter Available Seats" value="" id="modal-available_seats" name="available_seats" class="form-control" required />
                </div>

                <div class="form-outline mb-3">
                  <label class="form-label d-block mt-1" for="status">Train Status</label>
                  <select class="form-select" id="modal-status" name="status" required>
                    <option value="active" selected>Active</option>
                    <option value="not active">Not Active</option>
                  </select>
                </div>

                <div class="form-outline mb-3">
                  <label class="form-label d-block mt-1" for="train_class">Train Class</label>
                  <select class="form-select" id="modal-train_class" name="train_class" required>
                    <option value="first" selected>First</option>
                    <option value="second">Second</option>
                  </select>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" name="addNew" class="btn btn-primary">Add New</button>
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
      const editLinks = document.querySelectorAll('.edit-train-link');

      editLinks.forEach(link => {
        link.addEventListener('click', function () {
          document.getElementById('modal-train-id').value = this.dataset.id;
          document.getElementById('modal-train_name').value = this.dataset.train_name;
          document.getElementById('modal-train_type').value = this.dataset.train_type;
          document.getElementById('modal-train_number').value = this.dataset.train_number;
          document.getElementById('modal-train_capacity').value = this.dataset.train_capacity;
          document.getElementById('modal-departure_station').value = this.dataset.departure_station;
          document.getElementById('modal-departure_time').value = this.dataset.departure_time;
          document.getElementById('modal-arrival_station').value = this.dataset.arrival_station;
          document.getElementById('modal-arrival_time').value = this.dataset.arrival_time;
          document.getElementById('modal-available_seats').value = this.dataset.available_seats;
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