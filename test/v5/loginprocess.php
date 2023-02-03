<?php 
    session_start(); //start session

    include("config.php"); //import database connection
    //include("login.php");

    //If user exists, pull user's data
    if(isset($_REQUEST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $query = "SELECT * FROM members_db WHERE username=$username AND pass=$password;";
        $data = mysqli_query($conn, $query);
        $result = mysqli_fetch_array($data);

        echo "$result";

        //If the user is found, then redirect to the welcome page
        if($result){
            $_SESSION['login']="1";
            header("Location:index.php");
        }
        //Otherwise, stay on the login page
        else{
            header("Location:login.php?err=1");
        }
    }

?>