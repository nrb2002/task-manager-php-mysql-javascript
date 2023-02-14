<?php
  session_start(); //Start session
  ob_start(); //Prevent redirection errors
  include ("../session.php");//Import session manager
  //include ("database/config.php");
  //require_once ("database/edit-profile.php"); //Import the edit profile php

  include ("add_member.php");

?>



<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Task Manager></title>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        <!--Font Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      

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
      <div class="d-flex align-items-center p-3 mt-3  text-white bg-purple rounded shadow-sm">
        <img class="me-3" src="/docs/5.2/assets/brand/bootstrap-logo-white.svg" alt="" width="48" height="38">
        <div class="lh-1 ">
          <h1 class="h6 mb-0 text-white lh-1">Task & Members Manager</h1>
        </div>
      </div>

      <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">Edit member or Assign task</h6>
<!--
        <div class="row">
            <div class="col-12">
                <h3 class="text-center text-success" id="message" ><?php echo $success; ?></h3>
                <button id="addnew" class="btn btn-primary mt-4"><span class="glyphicon glyphicon-plus"></span> Add New Member</button>
                <div id="alert" class="alert alert-info text-center" style="margin-top:20px; display:none;">
                    <button class="close"><span aria-hidden="true">×</span></button>
                    <span id="alert_message"></span>
                </div>  
                <table class="table table-bordered table-striped table-hover" style="margin-top:20px;">
                    <thead>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email Address</th>
                    <th>Phone number</th>
                    <th width="150">Action</th>
                    </thead>
                    <tbody id="tbody">
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>0810548945</td>
                            <td class="text-center">
                                <a href="" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="" class="link-danger"><i class="fa-solid fa-trash fs-5 me-3"></i></a>                      
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>  
-->

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-9">Members' Data</div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Select Page</span>
                            </div>
                            <select name="pagelist" id="pagelist" class="form-control"></select>
                            <div class="input-group-append">
                                <span class="input-group-text">of&nbsp;<span id="totalpages"></span></span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="members_table" class="table table-bordered table-hover table-stripped">
                        <thead>
                            <tr>
                                <th style="text-align: center;">ID</th>
                                <th style="text-align: center;">First Name</th>
                                <th style="text-align: center;">Family Name</th>
                                <th style="text-align: center;">Email Address</th>
                                <th style="text-align: center;">Phone Number</th>
                            </tr>
                        </thead>
                    </table>             
                </div>
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