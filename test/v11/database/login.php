<?php
/*Processes the login form submission and returns the outcome to the index.php file*/

//Check if the form was submitted
if(isset($_POST["login"])){

    //If either field is empty, return an error message
    if(empty($_POST["username"]) || empty($_POST["pass"])){
        $message = "All fields are required";
    }            
    //If both field are filled, check the database
    else if(!empty($_POST["username"]) || !empty($_POST["pass"])){
        //Otherwise, find the user
        $query = "SELECT * FROM user WHERE username=:username AND pass=:pass";
        $statement = $conn->prepare($query);
        $statement->execute(
            array(
                'username'=>$_POST["username"],
                'pass'=>$_POST["pass"]
            )
        );

        //Count the number of matches
        $count = $statement->rowCount();

        //If there is at least one match, then set session variables and redirect to user page
        if($count>0){
            session_start();

            //Pull session variables
            $_SESSION["userid"] = $_POST["userid"];
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["pass"] = $_POST["pass"];
            
            //Redirect user to the dashboard
            header("Location:welcome");
        }else{
            $message= "Login incorrect";
        }
    }
}



?>