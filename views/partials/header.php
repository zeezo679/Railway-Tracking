<?php
if (session_status() === PHP_SESSION_NONE) session_start();
$user = $_SESSION["user"] ?? [
    "email" => "ad@ad.com",
    "firstName" => "User",
    "lastName" => "",
    "balance" => "0.00"
];
?>
<!-- Topbar Start -->
<div class="container-fluid px-3 py-1" style="background: #13357B;">
    <div class="row gx-0 align-items-center">
        <div class="col-12 col-md-8 text-center text-md-start mb-2 mb-md-0">
            <div class="d-inline-flex align-items-center" style="height: 40px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="col-12 col-md-4 text-center text-md-end">
            <div class="d-inline-flex align-items-center" style="height: 40px;">
                <div class="d-flex align-items-center text-light me-3">
                    <i class="far fa-envelope"></i>
                    <small class="mx-1"><?= htmlspecialchars($user["email"]) ?></small>
                </div>
                <div class="d-flex align-items-center text-light me-3">
                    <img src="/assets/template/img/user_icon.jpg" alt="User" class="rounded-circle me-2" width="28" height="28">
                    <small><?= htmlspecialchars($user["firstName"] . ' ' . $user["lastName"]) ?></small>
                </div>
                <div class="d-flex align-items-center text-light">
                    <i class="fas fa-wallet text-success me-1"></i>
                    <small><?= htmlspecialchars($user["balance"]) ?></small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid p-0" style="background: #13357B;">
    <nav class="navbar navbar-expand-lg navbar-dark px-4 px-lg-5 py-2" style="background: #13357B;">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0 text-white"><i class="fa fa-map-marker-alt me-2"></i>Travela</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/home" class="nav-item nav-link<?= ($_SERVER['REQUEST_URI'] == '/home' ? ' active' : '') ?>">Home</a>
                <a href="/book" class="nav-item nav-link<?= ($_SERVER['REQUEST_URI'] == '/book' ? ' active' : '') ?>">Book Now</a>
            </div>
            <a href="/logout" class="btn btn-danger rounded-pill py-2 px-4 ms-lg-4">Log Out</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->

<!-- Bootstrap JS Bundle (for navbar toggler to work) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
