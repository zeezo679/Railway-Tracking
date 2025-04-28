<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  </head>
  <body class="d-flex flex-column min-vh-100">
  <main class="flex-grow-1 py-4" >
    <div class="container-fluid h-custom pt-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form method="POST" action="/login">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">Sign in with</p>
              <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>
  
              <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-twitter"></i>  
              </button>
  
              <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-linkedin-in"></i>
              </button>
            </div>
  
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0">Or</p>
            </div>
  
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4 d-flex align-items-center gap-3">
              <label class="form-label fw-bold w-25" for="form3Example3">Email address</label>
              <input  name="email" type="email" id="form3Example3" class="w-75 form-control form-control-lg"
                placeholder="Enter a valid email address" 
                value="<?= isset($old['email']) ? htmlspecialchars($old['email']) : '' ?>"
                />

            </div>
  
            <!-- Password input -->
            <div data-mdb-input-init class="d-flex align-items-center gap-3 form-outline mb-3">
              <label class="form-label fw-bold w-25" for="form3Example4">Password</label>
              <input  name="password" type="password" id="form3Example4" class="w-75 form-control form-control-lg"
                placeholder="Enter password"  value="<?= isset($old['password']) ? htmlspecialchars($old['password']) : '' ?>" />
            </div>
              <div>
                <?php if ($errors !== ""):?>
                    <p class="error-message"><?= $errors ?></p>
                <?php endif; ?>
              </div>
            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input  class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Remember me
                </label>
              </div>
              <a href="#!" class="text-body">Forgot password?</a>
            </div>
  
            <div class="text-center text-lg-start mt-4 pt-2">
              <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register"
                  class="link-danger">Register</a></p>
            </div>
          </form>
        </div>  
      <div class="text-center col-md-9 col-lg-6 col-xl-5">
          <img src="https://img.freepik.com/premium-photo/shot-train_931878-262568.jpg"
          class="rounded-4 shadow-4 w-75" alt="Sample image">
        </div>
      </div>
    </div>

  </main>
  <footer class="bg-primary text-center text-md-start py-4 px-4 px-xl-5">
  <div class="d-flex flex-column justify-content-center align-items-center">
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
  </div>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

</body>
</html>