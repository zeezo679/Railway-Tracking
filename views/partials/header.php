<?php
if (!isset($notifications)) $notifications = [];
if (session_status() === PHP_SESSION_NONE) session_start();
$user = $_SESSION["user"] ?? [
    "email" => "ad@ad.com",
    "firstName" => "User",
    "lastName" => "",
    "balance" => "0.00",
];
?>

<div class="container-fluid bg-primary px-5 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                      
                      <div class="d-flex me-2 align-items-center text-light text-decoration-none">
                        <!-- Circle user mail icon -->
                        <i class="far fa-envelope fa-2x"></i>
                        <!-- User name -->
                        <small class="mx-1"><?php echo $_SESSION["user"]["email"]; ?></small>
                      </div>
                      <div class="d-flex me-2 align-items-center text-light text-decoration-none">
                        <!-- Circle user image -->
                        <img src="/assets/template/img/user_icon.jpg" alt="User" class="mx-3 rounded-circle me-2" width="30" height="30">
                        <!-- User name -->
                        <small><?php echo $_SESSION["user"]["firstName"].$_SESSION["user"]["lastName"]; ?></small>
                      </div>
                      <div class="d-flex me-2 align-items-center text-light text-decoration-none">
                        <i class="fas me-1 fa-wallet text-success"></i>
                        <small><?php echo $_SESSION["user"]["balance"]; ?></small>
                      </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" style="background-color: #13357b;">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Travela</h1>
                    <!-- <img src="/assets/template/img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="/home" class="nav-item nav-link active">Home</a>
                        <a href="/book" class="nav-item nav-link">Book Now   </a>
                        <a href="/tracking" class="nav-item nav-link active">Track Your Train</a>
                        <a href="/confirm" class="nav-item nav-link active">Ticket</a>
                        <div class="dropdown">
                          <a class="nav-link text-white position-relative" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="me-1">Notifications </span><i class="fas fa-bell fa-lg"></i>
                            <span class="position-absolute top-10 start-200 translate-middle badge rounded-pill bg-warning">
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
                        </div>
                    </div>
                    <a href="/logout" class="btn btn-danger rounded-pill py-2 px-4 ms-lg-4">Log Out</a>
                </div>
            </nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
