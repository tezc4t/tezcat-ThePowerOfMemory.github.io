<?php
include "../../database.php";

$result = $conn->query("SELECT * FROM chat_messages ORDER BY id ASC");

$messages = [];

while ($row = $result->fetch_assoc()) {
    $messages[] = $row;
}

echo json_encode($messages);
?>
