<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    // vérifie si les infos entrées correspondent à un compte existant et renvoie vers la page d'acceuil si oui
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
        $_SESSION['userid'] = $u['id']; // récupère l'id du compte connecté
        $stmt2 = $pdo->query("UPDATE utilisateur SET last_connection = NOW() WHERE id = $_SESSION[userid]"); // met à jour la dernière connection du compte
    } else {
        $_SESSION['mvsmdp'] = 'adresse email ou mot de passe incorrect';
        header('Location: /index.php');
    };