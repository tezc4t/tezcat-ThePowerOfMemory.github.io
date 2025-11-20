<?php
require 'database.php';

session_start();

if (!function_exists('active')) {
    function active($current_page) {
        $url_array = explode('/', $_SERVER['REQUEST_URI']);
        $url = strtok(end($url_array), '?');
        if ($current_page === $url) echo 'active';
    }
}

function getScore() {
    $pdo = getPDO();
    $stmt = $pdo->query("SELECT COUNT(*) AS total FROM score WHERE game_id = 1");
    return $stmt->fetch()['total'];
}

function lowScore() {
    $pdo = getPDO();
    $stmt = $pdo->query("SELECT MIN(score) AS best FROM score WHERE difficulty = 3");
    return $stmt->fetch()['best'];
}

function nbutilisateur() {
    $pdo = getPDO();
    $stmt = $pdo->query("SELECT COUNT(*) AS total FROM utilisateur");
    return $stmt->fetch()['total'];
}

function nbscorebattu() {
    $pdo = getPDO();
    $stmt = $pdo->query("SELECT COUNT(*) AS total FROM score 
                         WHERE DAYOFYEAR(created_at) = DAYOFYEAR(NOW()) 
                         AND YEAR(created_at) = YEAR(NOW())");
    return $stmt->fetch()['total'];
}

function sessionactive() {
    $pdo = getPDO();
    $stmt = $pdo->query("SELECT COUNT(*) AS total 
                         FROM utilisateur 
                         WHERE last_connection >= NOW() - INTERVAL 1 HOUR");
    return $stmt->fetch()['total'];
}

function afficheremail() {
    if (!isset($_SESSION['userid'])) return null;

    $pdo = getPDO();
    $stmt = $pdo->prepare("SELECT email FROM utilisateur WHERE id = ?");
    $stmt->execute([$_SESSION['userid']]);
    $u = $stmt->fetch();
    return $u['email'] ?? null;
}

function affichernom() {
    if (!isset($_SESSION['userid'])) return null;

    $pdo = getPDO();
    $stmt = $pdo->prepare("SELECT pseudo FROM utilisateur WHERE id = ?");
    $stmt->execute([$_SESSION['userid']]);
    $u = $stmt->fetch();
    return $u['pseudo'] ?? null;
}
?>
