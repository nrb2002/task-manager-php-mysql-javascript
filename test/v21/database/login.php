<?php

    if (isset($_POST['login']))
    {
        //Clean username entry
        $username = htmlspecialchars($_POST['username']);
        
        //Encrypt password entry
        //$passwd = sha1($_POST['pass']);
        $pass = $_POST['pass'];
    
        //Check if all field are filled
        if(!empty($_POST['username']) AND !empty($_POST['pass']))
        {
            //Prepare the query
            $sql = $pdo->prepare("SELECT * FROM user WHERE username = ? AND pass = ?");
            $sql -> execute(array($username, $pass));
            $userexist = $sql->rowCount(); //Compte le nombre d'enregistrement où le pseudo a été trouvé et retourne un integer
    
            //If user exists, 
            if($userexist == 1)
            {
                session_start(); //Start session
                
                //match the user with login info
                $userinfo =  $sql->fetch();
    
                //Pull session variables
                $_SESSION['userid'] = $userinfo['userid'];
                $_SESSION['username'] = $userinfo['username'];
                $_SESSION['pass'] = $userinfo['pass'];
                $_SESSION['email'] = $userinfo['email'];
                $_SESSION['firstname'] = $userinfo['firstname'];
                $_SESSION['lastname'] = $userinfo['lastname'];
                $_SESSION['phone'] = $userinfo['phone'];
                
                ob_start(); //Prevent redirection errors
                header("Location:welcome?user=".$_SESSION['username']);
                ob_end_flush(); //Prevent redirection errors
                
            }
            //If user doesnt exist
            else
            {
                $message = "Login incorrect! Please contact your administrator.";
            }
        }
        //If either field is empty, send error message
        else
        {
            $message = "Please check empty field.";
        }
    }


?>