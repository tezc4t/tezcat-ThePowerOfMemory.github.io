<?php
    require_once 'config.php';

    function getPDO(): PDO {
        static $pdo = null; // Garde en mémoire
        
        if ($pdo === null) {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];
            try {
                $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
            } catch (PDOException $e) {
                error_log("PDO Error: " . $e->getMessage());
                die("Erreur de connexion à la base de données.");
            }
        }
        return $pdo;
    }