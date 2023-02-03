<?php
    include ("session.php");
    include ("database/config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
</head>
<body>
    <!--Check if the session has been started-->
    <?php 
        if(isset($_SESSION['userid'])){
            $user = $_SESSION['username'];

        }
        //If no session has been started, redirect the user to the login page
        else{
            header("Location: index.php");
        }
    
    ?>

</body>
</html>