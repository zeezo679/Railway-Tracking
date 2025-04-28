
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  </head>
  <body class="d-flex flex-column min-vh-100">
<!-- Section: Design Block -->
<main class="flex-grow-1">

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center justify-content-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right bg-body-tertiary" style="
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Sign up now</h2>
            <form method="POST" action="/register">
              <!-- 2 column grid layout with text inputs for the first and last names -->
                <div data-mdb-input-init class="d-flex align-items-center gap-3 form-outline mb-4">
                    <label class="form-label w-25 fw-bold" for="form3Example1">First-Name</label>
                    <input name="fName" placeholder="ex : user1" type="text" id="form3Example1" class="form-control w-75" 
                    value="<?= isset($old['fName']) ? htmlspecialchars($old['fName']) : '' ?>"
                    />
                </div>
                <div data-mdb-input-init class="d-flex align-items-center gap-3 form-outline mb-4">
                  <label class="form-label w-25 fw-bold" for="form3Example2">Last-Name</label>
                  <input name="sName" placeholder="ex : user2"  type="text" id="form3Example2" class="form-control w-75" 
                  value="<?= isset($old['lName']) ? htmlspecialchars($old['lName']) : '' ?>"
                  />
                </div>

              <!-- Email input -->
              <div data-mdb-input-init class="form-outline d-flex gap-3 align-items-center mb-4">
                <label class="form-label fw-bold w-25" for="form3Example3">Email-Address</label>
                <input name="email"  placeholder="ex : user@gmail.com" type="email" id="form3Example3" class="form-control w-75" 
                value="<?= isset($old['email']) ? htmlspecialchars($old['email']) : '' ?>"
                />
              </div>

              <!-- Password input -->
              <div data-mdb-input-init class="form-outline d-flex align-items-center gap-3 mb-4">
                <label class="form-label fw-bold w-25" for="form3Example4">Password</label>
                <input name="password"  placeholder="ex : ********" type="password" id="form3Example4" class="form-control w-75" 
                value="<?= isset($old['password']) ? htmlspecialchars($old['password']) : '' ?>"
                />
              </div>

              <div>
                <?php if (!empty($errors)): ?>
                  <?php foreach ($errors as $error): ?>
                    <p class="error-message" ><?= $error ?><p>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                  Subscribe to our newsletter
                </label>
              </div>

              <!-- Submit button -->
              <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                Sign up
              </button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>or sign up with:</p>
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 text-center mb-lg-0 m-auto">
        <div class="d-flex justify-content-between align-items-center"></div>
        <img  src="https://img.freepik.com/premium-photo/shot-train_931878-262568.jpg" class="img-fluid rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
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
<!-- Section: Design Block -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>