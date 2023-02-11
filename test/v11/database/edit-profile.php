<?php
    
    //If there is an active session, process the form
    if(isset($_SESSION["username"]) )
    {
        //Get the user's data from the form and match with the database
        $requser = $pdo->prepare("SELECT * FROM user WHERE username = ?");
        $requser->execute(array($_SESSION["username"]));

        $user =  $requser->fetch();

        //Check for any firstname update
        if (isset($_POST["firstname"]) AND !empty($_POST["firstname"]) AND $_POST["firstname"] != $user["firstname"]) 
        {
            $firstname = htmlspecialchars($_POST["firstname"]); //Clean the entry
           
            //Update the database
            $updatefirstname = $pdo->prepare("UPDATE user SET firstname=? WHERE username = ?");
            $updatefirstname->execute(array($firstname, $_SESSION["username"]));            
        }
        
        //Check for any lastname update
        if (isset($_POST["lastname"]) AND $_POST["lastname"] != $user["lastname"]) 
        {
            if (!empty($_POST["lastname"])){
                $lastname = htmlspecialchars($_POST["lastname"]); //Clean the entry
           
                //Update the database
                $updatelastname = $pdo->prepare("UPDATE user SET lastname=? WHERE username = ?");
                $updatelastname->execute(array($lastname, $_SESSION["username"]));
            
            }else{
                $error = "Please verify Lastname name entry!";   
            }            
        }
       
        //Check for any email update
        if((isset($_POST["email"]) AND !empty($_POST["email"]) AND $_POST["email"] != $user["email"]) )
        {
            $email = htmlspecialchars($_POST["email"]); //Clean the entry

            //Check if it's a valid email address
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                //Update database
                $updatemail = $pdo->prepare("UPDATE user SET email = ? WHERE username = ?");
                $updatemail->execute(array($email, $_SESSION["username"]));  
                
                //Redirect to profile page
                //header("Location: profile?user=".$_SESSION["username"]);

                //Print success message
                //$success = "Profile updated successfully!";
                
            }

            else
            {
                $error = "Invalid email address!";   
            }

        }

        //Check for any phone number update
        if((isset($_POST["phone"]) AND !empty($_POST["phone"]) AND $_POST["phone"] != $user["phone"]) )
        {
            $phone = preg_match('/^[0-9]{10}+$/', $_POST["phone"]);//Restrict entry to 10-digit numbers starting 0-9

            //Check if it's a valid phone number
            if(filter_var($phone, FILTER_SANITIZE_NUMBER_INT))
            {
                //Update database
                $updatephone = $pdo->prepare("UPDATE user SET phone = ? WHERE username = ?");
                $updatephone->execute(array($phone, $_SESSION["username"]));  
                
            }else{
                $error = "Invalid phone number!";   
            }
        }
        
        //Check for any password update
        if (isset($_POST["newpass"]) AND !empty($_POST["newpass"]) AND $_POST["newpass"] != $user["pass"]) 
        {
            $newpass = htmlspecialchars($_POST["newpass"]); //Clean the entry
            
            //Encrypt the new password
            $newpass = sha1($_POST["newpass"]);
            $newpass2 = sha1($_POST["newpass2"]);

            if ($newpass == $newpass2)
            {
                //Update the database
                $updatemdp = $pdo->prepare("UPDATE user SET pass=? WHERE username = ?");
                $updatemdp->execute(array($newpass, $_SESSION["username"]));
                
                //Redirect user on profile page
                //header("Location: profile?user=".$_SESSION["username"]);
            }
            else
            {
                $error = "Please double check the password entered!";   
            }
        } 
        
        if(!isset($error)){
            //Print success message
            $success = "Profile updated successfully!";

            //Redirect to the profile page if update successful
            //header("Location:profile?user=".$_SESSION["username"]);
        }
            
    }


?>