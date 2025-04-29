<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Admin</title>
    <link rel="stylesheet" href="/assets/css/createAdmin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column min-vh-100">
  <main class="flex-grow-1" >
      <section class="vh-100 bg-image"
      style="background-image: url('https://wallpapercave.com/wp/wp2698316.jpg');">
      <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                  <h2 class="text-uppercase text-center mb-5">Reset Your Password</h2>

                  <form method="POST" action="/reset">

                    <div data-mdb-input-init class="form-outline justify-content-between align-items-center d-flex mb-4">
                      <label class="form-label fw-700 w-25 " for="form3Example1cg">New Password</label>
                      <input name="pass" type="text" placeholder="Enter First Name" id="form3Example1cg" class="form-control w-75 form-control-lg" />
                    </div>
                    <div data-mdb-input-init class="form-outline justify-content-between align-items-center d-flex mb-4">
                      <label class="form-label fw-700 w-25 " for="form3Example1cg">Re-Enter New Password</label>
                      <input name="second-pass" type="text" placeholder="Enter First Name" id="form3Example1cg" class="form-control w-75 form-control-lg" />
                    </div>
                    <div class="d-flex justify-content-center">
                      <button  type="submit" data-mdb-button-init
                        data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-light">Reset</button>
                    </div>
                    <?php if (!empty($errors)): ?>
                        <div class="alert alert-danger">
                            <?php foreach ($errors as $error): ?>
                            <p><?= htmlspecialchars($error) ?></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
