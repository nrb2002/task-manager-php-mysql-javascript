<?php
  session_start(); //Start session
  //ob_start(); //Prevent redirection errors
  include ("../../session.php");//Import session manager
  include ("../../database/config.php");
  require_once ("../../database/edit-profile.php"); //Import the edit profile php

  $sql = $pdo->prepare("SELECT * FROM family");
  $sql->setFetchMode(PDO::FETCH_ASSOC);
  $sql->execute();


  if($sql->rowCount() == 0) {
    echo "No data found.";
  }

 
  
          
          
          
?>



<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Members Directory</title>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" href="../../styles/main.css">
       <!-- Custom styles for this template -->
       <link href="../../styles/welcome.css" rel="stylesheet">
      

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
    <?php include "../../nav.php";?><!--Import nav bar-->

    <main class="container">
      <div class="d-flex align-items-center p-3 my-3 mt-3 text-white bg-purple rounded shadow-sm">
        <img class="me-3" src="/docs/5.2/assets/brand/bootstrap-logo-white.svg" alt="" width="48" height="38">
        <div class="lh-1">
          <h1 class="h6 mb-0 text-white lh-1">Members Directory</h1>
        </div>
      </div>

      <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">Families' Information</h6>

        <!--Table of families-->
        <table class="table table-stripped table-hover table-border">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Family Name</th>
              <th scope="col">Head's Firstname</th>
              <th scope="col">Email Address</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              while($row=$sql->fetch()) 
              {
                echo "<tr>".
                      "<th scope='row'>".$row["id"]."</th>".
                      "<td>".$row["lastname"]."</td>".
                      "<td>".$row["firstname"]."</td>".
                      "<td>".$row["email"]."</td>".
                      "<td>".$row["phone"]."</td>".                        
                    "</tr>";
              }
            ?>
            
          </tbody>
        </table>
        
        
      </div>
    </main>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="../../script/main.js"></script>    
  </body>
</html>