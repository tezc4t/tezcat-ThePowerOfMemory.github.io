<?php
session_start();
require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/database.php');


$chosenUserId = 1;


$stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE id = ?");
$stmt->execute([$chosenUserId]);
$user = $stmt->fetch();

if ($user) {
    $_SESSION['temp_user_id'] = $user['id'];
    if (!empty($user['Pseudo'])) {
        $_SESSION['temp_pseudo'] = $user['Pseudo'];
    } else {
        die("ERREUR : l’utilisateur ID 1 n’a pas de pseudo en base.");
    }
}

$pseudo = htmlspecialchars($_POST["name"] ?? '', ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST["email"] ?? '', ENT_QUOTES, 'UTF-8');
$mdp = htmlspecialchars($_POST["password"] ?? '', ENT_QUOTES, 'UTF-8');

$stmt = $pdo->prepare("UPDATE utilisateur SET pseudo = ?, email = ?, mdp = ? WHERE id = ?");
$stmt->execute([$pseudo, $email, $mdp, $_SESSION['temp_user_id']]);

header('Location: ../ACS.php');
exit;
?>
