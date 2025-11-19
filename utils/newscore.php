<?php
    session_start();
    require 'database.php';
    $pdo = getPDO();

    $post       = file_get_contents('php://input');
    $arrPost    = json_decode($post, true);

    var_dump($arrPost);

    $gridSize = $arrPost["gridSize"];
    switch ($gridSize) {
    case "4x4":
        $difficulty = "1";
        break;
    case "6x6":
        $difficulty = "2";
        break;
    case "8x8":
        $difficulty = "3";
        break;
    }
    $time  = $arrPost["score"];
    sscanf($time, "%d:%d", $minutes, $seconds);
    $score = $minutes * 60 + $seconds;
    $req   = $pdo->prepare("INSERT INTO score (user_id, game_id, difficulty, score) VALUES (:userId, :gameId, :difficulty, :score)");
    $req->execute([
        'userId' => $_SESSION['userid'],
        'gameId' => 1,
        'difficulty' => $difficulty,
        'score' => $score
    ]);