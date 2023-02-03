<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    

    <form action="loginprocess.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username">
        
        <label for="password">Username</label>
        <input type="password" name="password">

        <input type="submit" value="Connect" name="submit">
        
        <?php
            if(isset($_REQUEST['err'])){
                $msg = "Login credentials incorrect!";
            }    
            
        ?>
        <p style="color:red;"><?php if(isset($msg)){echo $msg;}?></p>
    </form>
    
</body>
</html>