<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST['nom']) and $_POST['nom'] != '' and
        isset($_POST['email']) and $_POST['email'] != '' and
        isset($_POST['username']) and $_POST['username'] != '' and
        isset($_POST['password']) and $_POST['password'] != ''

    ) {

        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $utilisateur = [
            "nom" => $nom,
            "email" => $email,
            "username" => $username,
            "password" => $password
        ];


        $_SESSION['utilisateur'] = $utilisateur;

        $_SESSION['etatconnexion'] = true;

        header('Location: profile.php');
    } else {
        $_SESSION['compterror'] = "Veuillez completer tous les champs SVP!";
        header('Location: compte.php');
    }
} else {
    header('Location: index.php');
}
