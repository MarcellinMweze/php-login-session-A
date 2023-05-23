<?php
session_start();

if (!isset($_SESSION['etatconnexion']) and $_SESSION['etatconnexion'] == false) {

    header('Location: index.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="contener">
        <div class="img">
            <img src="./image/user.png" alt="Photo de Profile">
        </div>
        <h3>Bienvenue dans votre compte, <?php echo $_SESSION['utilisateur']['nom']; ?></h3>
        <div class="paramsg">
            <p><?php echo $_SESSION['utilisateur']['password']; ?></p>
            <p><?php echo $_SESSION['utilisateur']['email']; ?></p>
        </div>

        <form action="deconnexion.php" method="post">
            <button type="submit" class="btn dcnx">Se connecter</button>
        </form>
    </div>
</body>

</html>