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
                  <h2 class="text-uppercase text-center mb-5">Create Admin Account</h2>

                  <form method="POST" action="/create">

                    <div data-mdb-input-init class="form-outline justify-content-between align-items-center d-flex mb-4">
                      <label class="form-label fw-700 w-25 " for="form3Example1cg">Admin First Name</label>
                      <input name="fname" type="text" placeholder="Enter First Name" id="form3Example1cg" class="form-control w-75 form-control-lg" />
                    </div>
                    
                    <div data-mdb-input-init class="form-outline justify-content-between align-items-center d-flex mb-4">
                      <label class="form-label fw-700 w-25" for="form4Example1cg">Admin Last Name</label>
                      <input name="lname" type="text" placeholder="Enter Last Name" id="form4Example1cg" class="form-control w-75 form-control-lg" />
                    </div>

                    <div data-mdb-input-init class="form-outline justify-content-between align-items-center d-flex mb-4">
                      <label class="form-label fw-700 w-25" for="form3Example3cg">Admin Email</label>
                      <input name="mail" type="email" placeholder="Enter E-mail" id="form3Example3cg" class="form-control w-75 form-control-lg" />
                    </div>

                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                      <label class="form-check-label" for="form2Example3g">
                        I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                      </label>
                    </div>

                    <div class="d-flex justify-content-center">
                      <button  type="submit" data-mdb-button-init
                        data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-light">Create</button>
                    </div>

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
<!-- <div class="container-fluid h-custom pt-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form method="POST" action="/create">
        
            <div data-mdb-input-init class="d-flex align-items-center gap-3 form-outline mb-3">
              <label class="form-label fw-bold w-25" for="form3Example4">First Name</label>
              <input required name="fname"  id="form3Example1" class="w-75 form-control form-control-lg"
                placeholder="Enter First Name" />
            </div>
            <br>
            <div data-mdb-input-init class="d-flex align-items-center gap-3 form-outline mb-3">
              <label class="form-label fw-bold w-25" for="form3Example4">Last Name</label>
              <input required name="lname" id="form3Example2" class="w-75 form-control form-control-lg"
                placeholder="Enter Second Name" />
            </div>
            <br>
            <div data-mdb-input-init class="form-outline mb-4 d-flex align-items-center gap-3">
              <label class="form-label fw-bold w-25" for="form3Example3">Email address</label>
              <input required name="mail" type="email" id="form3Example3" class="w-75 form-control form-control-lg"
                placeholder="Enter a valid email address" />
            </div>
            <br>
            
            <br>
        
            <div class="text-center text-lg-start mt-4 pt-2">
              <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Add Admin</button>
            </div>
          </form>
        </div>  
    
    </div> -->