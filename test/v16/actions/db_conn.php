<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "members";

    //$conn = mysqli_connect($servername, $username, $password, $dbname);
/*
    if(!$conn){
        die("Unable to reach the server: ". mysqli_connect_error());
    }

    //echo "Connected successfully"; */

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            

?>