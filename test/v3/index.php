<?php
    $bdd=new PDO('mysql:host=127.0.0.1; dbname=members', 'root', '');

    if(isset($_POST['validate'])){
        echo "Formulaire envoyé";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement</title>
</head>
<body>
    <div align="center">
        <h2>Inscription</h2>
    <form action="" method="post">
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo"><br><br>

        <label for="email">Email</label>
        <input type="email" name="email"><br><br>

        <label for="password">Mot de passe</label>
        <input type="password" name="password"><br><br>

        <label for="password2">Confirmez le mot de passe</label>
        <input type="password2" name="password2"><br><br>

        <input type="button" value="Je m'inscris" name="validate">

        
    </form>
    </div>
    
    
</body>
</html>