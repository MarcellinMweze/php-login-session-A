<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST['username']) and $_POST['username'] != '' and
        isset($_POST['password']) and $_POST['password'] != ''
    ) {
        $nom = $_POST['username'];
        $password = $_POST['password'];

        if ($nom == $_SESSION['utilisateur']['username'] and $password == $_SESSION['utilisateur']['password']) {
            $_SESSION['etatconnexion'] = true;
            header('Location: profile.php');
        } else {
            $_SESSION['erromsg'] = 'Votre Username ou mot de passe incorrect!';
            header('Location: index.php');
        }
    } else {
        $_SESSION['errorindex'] = 'Veuillez remplir tous les champs svp!';
        header('Location: index.php');
    }
} else {
    header('location: index.php');
}
