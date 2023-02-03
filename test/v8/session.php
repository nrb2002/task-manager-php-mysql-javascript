<?php 
    //session_start();
    //Check if the session has not been started
    if(isset($_SESSION['username'])){
        echo '<h3>Welcome '.$_SESSION["username"].'!</h3>';
    }else{
        session_abort();
        header("Location:index.php");        
    }




?>