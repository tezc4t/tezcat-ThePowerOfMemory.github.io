<?php

    function afficheremail() {
        $pdo = getPDO();
        $stmt = $pdo->query("SELECT email FROM utilisateur WHERE id = $_SESSION[userid]");
        $u = $stmt->fetch();
        return $u['email'];
    }