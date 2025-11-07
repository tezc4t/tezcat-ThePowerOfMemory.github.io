<?php
    // fonction qui récupère le nombre de parties jouées
    function getScore() {
        $pdo = getPDO();
        $stmt = $pdo->query("SELECT count(*) FROM score WHERE game_id = 1");
        $u = $stmt -> fetch();
        return $u['count(*)'];
    }
    // fonction qui récupère le meilleur score
    function lowScore() {
        $pdo = getPDO();
        $stmt = $pdo->query("SELECT MIN(score) FROM score WHERE difficulty = 3");
        $u = $stmt -> fetch();
        return $u['MIN(score)'];
    }
    // fonction qui récupère le nombre de comptes existant
    function nbutilisateur() {
        $pdo = getPDO();
        $stmt = $pdo->query("SELECT count(*) FROM utilisateur");
        $u = $stmt -> fetch();
        return $u['count(*)'];
    }
    // fonction qui récupère le nombre de parties jouées aujourd'hui
    function nbscorebattu() {
        $pdo = getPDO();
        $stmt = $pdo->query("SELECT count(*) FROM score WHERE DAYOFYEAR(created_at) = DAYOFYEAR(NOW()) 
                                                        AND YEAR(created_at) = YEAR(NOW())");
        $u = $stmt -> fetch();
        return $u['count(*)'];
    }
    // fonction qui récupère le nombre de joueurs qui se sont connectés il y a moins d'une heure
    function sessionactive() {
        $pdo = getPDO();
        $stmt = $pdo->query("SELECT count(*) FROM utilisateur WHERE last_connection >= NOW() - INTERVAL 1 HOUR");
        $u = $stmt -> fetch();
        return $u['count(*)'];
    }