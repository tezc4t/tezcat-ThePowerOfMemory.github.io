<?php
    session_start();
    require 'database.php';
    $pdo = getPDO();
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $mdp = htmlspecialchars($mdp, ENT_QUOTES, 'UTF-8');
    $stmt = $pdo->query("SELECT id FROM utilisateur WHERE email = '$email' AND mdp = '$mdp'");
    $u = $stmt -> fetch();
    if ($u != NULL){
        header('Location: ../accueil.php');
        $_SESSION['mvsmdp'] = '';
        $_SESSION['userid'] = $u['id'];
    } else {
        $_SESSION['mvsmdp'] = 'adresse email ou mot de passe incorrect';
        header('Location: /index.php');
    };