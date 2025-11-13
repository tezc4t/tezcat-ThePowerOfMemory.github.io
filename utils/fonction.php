<?php
require 'database.php';
// Vérifie que la fonction n'est pas déjà déclarée
if (!function_exists('active')) {
    /**
     * Ajoute la classe "active" au lien correspondant à la page actuelle
     *
     * @param string $current_page Le nom du fichier de la page (ex: 'index.php')
     */
    function active($current_page) {
        // Récupère l'URL actuelle
        $url_array = explode('/', $_SERVER['REQUEST_URI']);
        $url = end($url_array);
        $url = strtok($url, '?'); // Enlève les éventuels paramètres GET

        // Compare et affiche la classe si c'est la bonne page
        if ($current_page === $url) {
            echo 'active';
        }
    }
}
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
    // fonction qui récupère l'email de l'utilisateur connecté
    function afficheremail() {
        $pdo = getPDO();
        $stmt = $pdo->query("SELECT email FROM utilisateur WHERE id = $_SESSION[userid]");
        $u = $stmt->fetch();
        return $u['email'];
    }
    // fonction permettant de récupérer le pseudo du compte connecté
    function affichernom() {
        $pdo = getPDO();
        $stmt = $pdo->query("SELECT pseudo FROM utilisateur WHERE id = $_SESSION[userid]");
        $u = $stmt->fetch();
        return $u['pseudo'];
    }
    ?>