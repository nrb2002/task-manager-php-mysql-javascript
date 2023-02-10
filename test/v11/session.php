<?php 
    
    //session_start();
    //Check if the session has not been started
    if(isset($_SESSION['username'])){        
        $user = $_SESSION["username"];

        //echo '<h3>Welcome '.$user.'!</h3>';
        //echo '<a class="navbar-brand" href="#">Welcome back,<br><i> '. $user.' </i> !</a>';

    }else{
        session_abort();
        header("Location:./");        
    }




?>