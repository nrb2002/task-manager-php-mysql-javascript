<?php
    session_start();

    if(isset($_SESSION["username"])){
        echo '<h3>Welcome'.$_SESSION["username"].'</h3>';
    }

?>