<?php
session_start();

$_SESSION['etatconnexion'] = false;

header('Location:index.php');
