<?php
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
?>