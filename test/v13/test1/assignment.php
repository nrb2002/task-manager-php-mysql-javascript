<?php
  session_start(); //Start session
  ob_start(); //Prevent redirection errors
  include ("../session.php");//Import session manager
  //include ("database/config.php");
  //require_once ("database/edit-profile.php"); //Import the edit profile php

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
      

      <!-- Favicons -->
      <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
      <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
      <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
      <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
      <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
      <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
      <meta name="theme-color" content="#712cf9">

      <!-- Custom styles for this template -->
      <link href="../styles/main.css" rel="stylesheet">
      <link href="../styles/welcome.css" rel="stylesheet">
  </head>
  <body>
    <?php include "../nav.php";?><!--Import nav bar-->

    <main class="container">
      <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
        <img class="me-3" src="/docs/5.2/assets/brand/bootstrap-logo-white.svg" alt="" width="48" height="38">
        <div class="lh-1">
          <h1 class="h6 mb-0 text-white lh-1">Task & Members Manager</h1>
        </div>
      </div>

      <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">Edit member or Assign task</h6>

        <div class="row">
          <div class="col-12">
              <button id="addnew" class="btn btn-primary mt-4"><span class="glyphicon glyphicon-plus"></span> Add New Member</button>
              <div id="alert" class="alert alert-info text-center" style="margin-top:20px; display:none;">
                  <button class="close"><span aria-hidden="true">×</span></button>
                  <span id="alert_message"></span>
              </div>  
              <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                  <th>ID</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Address</th>
                  <th width="150">Action</th>
                </thead>
                <tbody id="tbody"></tbody>
              </table>
          </div>
        </div>  
      
      </div>
    </main>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="./main.js"></script>
    <script src="./assignment.js"></script>    
  </body>
</html>