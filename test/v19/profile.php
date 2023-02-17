<?php
  session_start(); //Start session
  //ob_start(); //Prevent redirection errors
  include ("session.php");//Import session manager
  include ("database/config.php");
  require_once ("database/edit-profile.php"); //Import the edit profile php

?>



<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>User Profile - <?php echo $_SESSION["username"]; ?></title>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" href="styles/main.css">
      <!-- Custom styles for this template -->
      <link href="styles/welcome.css" rel="stylesheet">
      

      <!-- Favicons -->
      <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
      <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
      <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
      <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
      <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
      <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
      <meta name="theme-color" content="#712cf9">

      
  </head>
  <body>
    <?php include "nav.php";?><!--Import nav bar-->

    <main class="container">
      <div class="d-flex align-items-center p-3 my-3 mt-3 text-white bg-purple rounded shadow-sm">
        <img class="me-3" src="/docs/5.2/assets/brand/bootstrap-logo-white.svg" alt="" width="48" height="38">
        <div class="lh-1">
          <h1 class="h6 mb-0 text-white lh-1">Edit profile</h1>
        </div>
      </div>

      <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">Personal Information</h6>
        
        <form action="" method="post" class="row g-3 needs-validation" novalidate>
          <div class="col-md-4">
            <label for="firstname" class="form-label">First name</label>
            <input type="text" class="form-control" id="firstname" value="<?php echo $_SESSION["firstname"];?>" name="firstname" >
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4">
            <label for="lastname" class="form-label">Family name</label>
            <input type="text" class="form-control" id="lastname" value="<?php echo $_SESSION["lastname"];?>" name="lastname" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4">
            <label for="username" class="form-label">Username</label>
            <div class="input-group">
              <input type="text" class="form-control muted" id="username" value="<?php echo $_SESSION["username"];?>" disabled>                
            </div>
          </div>
          <div class="col-md-4">
            <label for="newpass" class="form-label">New Password</label>
            <div class="input-group">
              <input type="password" class="form-control muted" id="newpass" name="newpass">                
            </div>
          </div>
          <div class="col-md-4">
            <label for="newpass2" class="form-label">Password Confirmation</label>
            <div class="input-group">
              <input type="password" class="form-control muted" id="newpass2" name="newpass2">                
            </div>
          </div>
          <div class="col-md-4">
            <label for="email" class="form-label">Email</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
              <input type="email" class="form-control" id="email" aria-describedby="inputGroupPrepend" value="<?php echo $_SESSION["email"];?>" name="email" required>
              <div class="invalid-feedback">
                Please enter a valid email address.
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <label for="phone" class="form-label">Telephone</label>
            <!--<span class="input-group-text" id="inputGroupPrepend">+243</span>-->
            <input type="text" class="form-control" id="phone" value="<?php echo $_SESSION["phone"];?>" name="phone" required>
            <div class="invalid-feedback">
              Please provide a valid phone number.
            </div>
          </div>            
          
          <div class="col-12">
            <input class="btn btn-primary" type="submit" value="Update profile" name="update" >
          </div>
        </form>
      </div>
    </main>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="main.js"></script>    
  </body>
</html>