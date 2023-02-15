<?php
    session_start();
    session_destroy();
    include('database/config.php');//Import the server connect to allow access to the database
    include ('database/login.php'); //Import the login form processor
    //include ("session.php");
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Baron Tshibasu, and contributors">
        <meta name="generator" content="Hugo 0.108.0">
        <title>Login</title>
        
        <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- Favicons 
        <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
        <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#712cf9">

        -->

        
        <!-- Custom styles for this template -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
        <link href="styles/main.css" rel="stylesheet">
        <link href="styles/welcome.css" rel="stylesheet">
    </head>
    <body class="text-center">
        
        <main class="form-signin w-100 m-auto">
            <div class="container login-form"> 
                <?php
                    if(isset($message)){
                        echo '<div class="color-danger"><label class="text-danger">'.$message.'</label><div>';
                        //--bs-danger-bg-subtle
                    }        
                ?>       
                <form class="form-group " action="" method="post">
                    <img class="mb-4" /*src="/docs/5.3/assets/brand/bootstrap-logo.svg"*/ alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" onfocus="this.value=''" name="username">
                        <label for="floatingInput">Username</label>
                    </div>
                    <!--
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                        <label for="floatingInput">Email address</label>
                    </div>
                    -->
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" onfocus="this.value=''" name="pass">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="checkbox mb-3">
                        <label><input type="checkbox" value="remember-me"> Remember me</label>
                    </div>
                    
                    <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Sign in</button>
                    
                    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
                </form>       
            </div>
        </main>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
            <script src="scripts/main.js"></script>

        
    </body>
</html>
