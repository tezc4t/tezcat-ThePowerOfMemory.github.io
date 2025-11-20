<?php
session_start();
require __DIR__ . '/../../utils/config.php';
header('Content-Type: application/json');

if (!isset($_SESSION['temp_user_id']) || !isset($_SESSION['temp_pseudo'])) {
    echo json_encode(["status" => "error", "message" => "Non connecté"]);
    exit;
}

if (!isset($_POST['message']) || trim($_POST['message']) === "") {
    echo json_encode(["status" => "error", "message" => "Message vide"]);
    exit;
}

$message = trim($_POST['message']);
$user_id = $_SESSION['temp_user_id'];
$pseudo  = $_SESSION['temp_pseudo'];

try {
    $stmt = $pdo->prepare("INSERT INTO chat_messages (user_id, pseudo, message, created_at) VALUES (?, ?, ?, NOW())");
    $stmt->execute([$user_id, $pseudo, $message]);

    echo json_encode(["status" => "success"]);
} catch (Exception $e) {
    echo json_encode(["status" => "error", "message" => $e->getMessage()]);
}
exit;

