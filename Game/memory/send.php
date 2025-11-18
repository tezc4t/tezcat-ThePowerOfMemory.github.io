<?php
include "../../database.php";

if (isset($_POST["message"])) {
    $msg = htmlspecialchars($_POST["message"]);

    // ENREGISTRE LE MESSAGE UTILISATEUR
    $stmt = $conn->prepare("INSERT INTO chat_messages (sender, message) VALUES ('user', ?)");
    $stmt->bind_param("s", $msg);
    $stmt->execute();

    // MESSAGE SERVEUR AUTOMATIQUE
    $response = "Serveur : J'ai bien reçu → " . $msg;

    $stmt2 = $conn->prepare("INSERT INTO chat_messages (sender, message) VALUES ('server', ?)");
    $stmt2->bind_param("s", $response);
    $stmt2->execute();
}
?>