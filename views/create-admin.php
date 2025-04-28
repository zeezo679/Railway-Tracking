<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Admin</title>
  </head>
  <body class="d-flex flex-column min-vh-100">
  <main class="flex-grow-1 py-4" >
    <div class="container-fluid h-custom pt-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form method="POST" action="/create">
        
  <!-- First name -->
            <div data-mdb-input-init class="d-flex align-items-center gap-3 form-outline mb-3">
              <label class="form-label fw-bold w-25" for="form3Example4">First Name</label>
              <input required name="fname"  id="form3Example1" class="w-75 form-control form-control-lg"
                placeholder="Enter First Name" />
            </div>
            <br>
            <!-- Last name -->
            <div data-mdb-input-init class="d-flex align-items-center gap-3 form-outline mb-3">
              <label class="form-label fw-bold w-25" for="form3Example4">Last Name</label>
              <input required name="lname" id="form3Example2" class="w-75 form-control form-control-lg"
                placeholder="Enter Second Name" />
            </div>
            <br>
            <!-- Email input -->
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
    
    </div>

</main>

</body>
</html>