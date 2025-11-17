<?php
require_once __DIR__ . 'utils/database.php';
session_start();

$pdo = getPDO();

$action = $_GET['action'] ?? null;
$userId = $_SESSION['user_id'] ?? null;

if (!$userId) {
    echo json_encode(['error' => 'User not logged in']);
    exit;
}

$gameId = 1; //game : power of memory



//generate chat message

if ($action === "load") {
    $sql = "
        SELECT 
            m.id,
            m.message,
            m.user_id,
            m.created_at,
            u.pseudo
        FROM msg m
        JOIN utilisateur u ON u.id = m.user_id
        WHERE m.game_id = ?
        AND m.created_at >= NOW() - INTERVAL 24 HOUR
        ORDER BY m.created_at ASC
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$gameId]);
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    exit;
}



// send message

if ($action === "send") {

    if (!isset($_POST['message']) || trim($_POST['message']) === "") {
        echo json_encode(['status' => 'empty']);
        exit;
    }

    $msg = trim($_POST['message']);
    $sql = "INSERT INTO msg (game_id, user_id, message) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([$gameId, $userId, $msg])) {
        echo json_encode(['status' => 'OK']);
    } else {
        $err = $stmt->errorInfo();
        echo json_encode(['status' => 'error', 'info' => $err[2]]);
    }

    exit;
}

echo json_encode(['success' => 'No action']);