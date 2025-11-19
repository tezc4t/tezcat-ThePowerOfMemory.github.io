<?php
session_start();
require __DIR__ . '/../../utils/config.php';
header('Content-Type: application/json');

// Vérifier session
if (!isset($_SESSION['temp_user_id'])) {
    echo json_encode(["error" => "Non connecté"]);
    exit;
}

try {
    // Récupérer les derniers messages
    $stmt = $pdo->prepare("SELECT user_id, pseudo, message, created_at AS timestamp 
                           FROM chat_messages 
                           ORDER BY created_at ASC");
    $stmt->execute();
    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($messages);
} catch (Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
exit;
