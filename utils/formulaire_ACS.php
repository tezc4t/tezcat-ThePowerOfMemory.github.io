<?php
    // modifier les infos du comptes
    session_start();
    require 'database.php';
    $pdo = getPDO();
    $pseudo = $_POST["name"];
    $email = $_POST["email"];
    $mdp = $_POST["password"];
    $pseudo = htmlspecialchars($pseudo, ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $mdp = htmlspecialchars($mdp, ENT_QUOTES, 'UTF-8');
    $pdo->query("UPDATE utilisateur SET pseudo = '$pseudo', email = '$email', mdp = '$mdp' WHERE id = $_SESSION[userid]");
    header('Location: ../ACS.php');
