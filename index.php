<?php
session_start();

if (isset($_SESSION['etatconnexion']) and $_SESSION['etatconnexion'] == true) {

    header('Location: profile.php');
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="contener">
        <h2>Connexion</h2>
        <form action="traitement.php" method="POST">
            <div>
                <input type="text" name="username" class="champs" placeholder="Username" autocomplete="off">
            </div>

            <div>
                <input type="password" name="password" class="champs" placeholder="Password" autocomplete="off">
            </div>
            <div class="msgerror">
                <p><?php if (isset($_SESSION['errorindex'])) {
                        echo $_SESSION['errorindex'];
                    } ?></p>
                <p><?php if (isset($_SESSION['erromsg'])) {
                        echo $_SESSION['erromsg'];
                    } ?></p>
            </div>
            <button type="submit" class="btn cnx">Se connecter</button>
            <div class="lienpara">
                <p>Pas encore membre? <a href="compte.php">créer un compte!</a></p>
            </div>
        </form>
    </div>
    <?php
    unset($_SESSION['errorindex']);
    unset($_SESSION['erromsg']);
    ?>
</body>

</html>