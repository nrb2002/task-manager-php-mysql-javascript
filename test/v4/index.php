<?php
    //Import session manager
    include("session.php");

    //Import data base connection 
    include("database/config.php");
    
    //Check if the submit button has been clicked to send the form's data
    if(isset($_POST['submit'])) {

        //Check if the login field is empty
        if(empty($_POST['username'])){
            $username = null;
            $flag = false;
        }else{
            $username = $_POST['username'];
            $flag = true;
        }
        //Check if the login field is empty
        if(empty($_POST['password'])){
            $password = null;
            $flag = false;
        }else{
            $password = $_POST['password'];
            $flag = true;
        }

        //If the username and the password submitted are valid pull the user's data
        if($flag){
            $query = "SELECT * FROM users WHERE username=$username AND pass=`$password`";
            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($result);

            //Make sure the user exists and their id
            if(!empty($data['userid'])){

                //If the user does exist, start the session and set the session variables 
                session_start();
                $_SESSION['userid'] = $data['userid'];
                $_SESSION['username'] = $data['username'];
                $_SESSION['email'] = $data['email'];

                //Redirect the user to the Welcome page
                header("Location: dashboard.php");
            
            //If the username or password provided are not valid, return an error message
            }else{
                echo "<script>alert('Login incorrect);</script>";
            }


        }
        
    }

?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.108.0">
        
        <title>Page de connexion</title>
        
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/style.css">

            <!-- Favicons -->
        <!--
        <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
        <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#712cf9">
-->

    </head>

    <body class="text-center">
    
        <main class="form-signin w-100 m-auto">
            <div class="container">                                
                <form class="signin-form" action="" method="POST" >
                    <div class="form-group">                    
                        <img class="mb-4" src="" alt="" width="72" height="57">
                        <h1 class="h3 mb-3 fw-normal">Connectez-vous</h1>

                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="pseudo@example.com" name="username">
                            <label for="floatingInput">Email ou Pseudo</label>
                        </div>
                        
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="**********" name="password">
                            <label for="floatingPassword">Mot de passe</label>
                        </div>

                        <div class="checkbox mb-3">
                            <label><input type="checkbox" value="remember-me"> Se souvenir de moi</label>
                        </div>

                        <input class="w-100 btn btn-lg btn-primary" type="submit" value="Valider" name="submit">
                        
                        <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
                    </div>
                </form> 

            </div>
            
        </main>

    <!--
        <script src="scripts/script.js"></>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
-->
    </body>
</html>
