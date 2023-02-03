<?php 
    //Import data base connection 
    include("config.php"); 

    //Start session
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // username and password sent from form         
        $myusername = mysqli_real_escape_string($conn,$_POST['username']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
        
        $query = "SELECT id FROM members_db WHERE username = '$myusername' and pass = '$mypassword'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        
        $count = mysqli_num_rows($result);
        
        // If result matched $myusername and $mypassword, table row must be 1 row          
        if($count == 1) {
           session_register("myusername");
           $_SESSION['login_user'] = $myusername;
           
           header("location: dashboard.php");
        }else {
           $error = "Pseudo, adresse email ou mot de passe invalide!";
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
        <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
        <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#712cf9">

        <!-- Custom styles for this template -->
        <link href="sign-in.css" rel="stylesheet">
    </head>

    <body class="text-center">
    
        <main class="form-signin w-100 m-auto">
            <div class="container-sm row-sm signin-form">
               <form action="" method="POST" >
                    <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
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
                        <label>
                            <input type="checkbox" value="remember-me"> Se souvenir de moi
                        </label>
                    </div>

                    <input class="w-100 btn btn-lg btn-primary" type="submit" value="Valider">
                    
                    <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
                </form> 
            </div>
            
        </main>


        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="scripts/script.js"></script>
    </body>
</html>
