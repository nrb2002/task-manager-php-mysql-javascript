<?php
   include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
   <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Acceuil</title>

         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
         <link rel="stylesheet" href="styles/style.css">

            <!-- Favicons -->
         <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
         <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
         <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
         <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
         <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
         <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
         <meta name="theme-color" content="#712cf9">

         <!-- Custom styles for this template -->
         <link href="sign-in.css" rel="stylesheet">
   </head>
   <body>
      <h1>Bienvenue <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Se déconnecter</a></h2>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="scripts/script.js"></script>
   </body>
</html>


<html">
   
