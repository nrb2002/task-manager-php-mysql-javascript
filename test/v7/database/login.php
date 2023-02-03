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
            $_SESSION["username"] = $_POST["username"];
            header("Location:dashboard.php");
        }else{
        $message= "Login incorrect";
        }
    }
}

?>