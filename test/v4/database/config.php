<?php
    $server = "localhost";
    $server_user = "root";
    $server_passwd = "";
    $dbname = "members_db";

    //Database connection string variable
    $conn = mysqli_connect($server, $server_user, $server_passwd, $dbname);


    echo "Succes!";

?>