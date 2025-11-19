<?php
// config.php - NE JAMAIS METTRE EN LIGNE SANS PROTECTION
define('DB_HOST', 'localhost:8889');
define('DB_NAME', 'TEST');
define('DB_USER', 'root');
define('DB_PASS', 'root'); // Vide par défaut dans XAMPP | WAMP
define('DB_CHARSET', 'utf8mb4');


try {
    $pdo = new PDO(
        'mysql:host=localhost;port=8889;dbname=TEST;charset=utf8',
        'root',
        'root', // mot de passe MAMP
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    die("Erreur PDO : " . $e->getMessage());
}