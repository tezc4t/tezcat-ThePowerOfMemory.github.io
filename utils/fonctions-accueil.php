<?php

    function getScore() {
        $pdo = getPDO();
        $stmt = $pdo->query("SELECT count(*) FROM score WHERE game_id = 1");
        $u = $stmt -> fetch();
        return $u['count(*)'];
    }
    function lowScore() {
        $pdo = getPDO();
        $stmt = $pdo->query("SELECT MIN(score) FROM score WHERE difficulty = 3");
        $u = $stmt -> fetch();
        return $u['MIN(score)'];
    }
    function nbutilisateur() {
        $pdo = getPDO();
        $stmt = $pdo->query("SELECT count(*) FROM utilisateur");
        $u = $stmt -> fetch();
        return $u['count(*)'];
    }
    function nbscorebattu() {
        $pdo = getPDO();
        $stmt = $pdo->query("SELECT count(*) FROM score WHERE DAYOFYEAR(created_at) = DAYOFYEAR(NOW()) 
                                                        AND YEAR(created_at) = YEAR(NOW())");
        $u = $stmt -> fetch();
        return $u['count(*)'];
    }
    function sessionactive() {
        $pdo = getPDO();
        $stmt = $pdo->query("SELECT count(*) FROM utilisateur WHERE last_connection >= NOW() - INTERVAL 1 HOUR");
        $u = $stmt -> fetch();
        return $u['count(*)'];
    }