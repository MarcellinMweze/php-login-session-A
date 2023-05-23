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
    <title>Compte</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="contener">
        <h2>S'enregistrer</h2>
        <form action="traitement-compte.php" method="POST">
            <div>
                <input type="text" name="nom" id="nom" class="champs" placeholder="Nom complet" autocomplete="off">
            </div>
            <div>
                <input type="email" name="email" id="email" class="champs" placeholder="Adresse email" autocomplete="off">
            </div>
            <div>
                <input type="text" name="username" id="username" class="champs" placeholder="Username" autocomplete="off">
            </div>
            <div>
                <input type="password" name="password" id="password" class="champs" placeholder="Password" autocomplete="off">
            </div>

            <div class="msgerror">
                <p><?php
                    if (isset($_SESSION['compterror'])) {
                        echo $_SESSION['compterror'];
                    } ?></p>
            </div>

            <button type="submit" class="btn cnx">Créer un compte</button>
            <div class="lienpara">
                <p>Déjà membre? <a href="index.php">connectez-vous!</a></p>
            </div>
        </form>
    </div>
    <?php
    unset($_SESSION['compterror']);
    ?>
</body>

</html>