<?php
    require 'database.php';

    function affichernom() {
        $pdo = getPDO();
        $stmt = $pdo->query("SELECT pseudo FROM utilisateur WHERE id = $_SESSION[userid]");
        $u = $stmt->fetch();
        return $u['pseudo'];
    }