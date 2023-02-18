<?php

/*This file manages the connection to the server. 
It can be imported in the entire project where the database connection will be needed
To import it, just include the following in the concerned file: 

<?php
    include('database/config.php');
?>

*/

    //Server connection variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "members";

    //Set connection
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
        // set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //test connection
        //echo "Connected successfully"; 
        
        //If connection failed, throw error message 
    }catch(PDOException $error) {
        $message = "Connection failed: " . $error->getMessage();
    }

