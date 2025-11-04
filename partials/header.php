<header>
<div class="header-container">
        <p>
            <a href="index.php">
                <img src="img/LOGOS.png" alt="logo">
            </a>
        </p>

        <?php
        // Fonction pour marquer le lien actif selon la page actuelle
        function active($current_page) {
            $url_array = explode('/', $_SERVER['REQUEST_URI']);
            $url = end($url_array);
            $url = strtok($url, '?'); // enlève les paramètres GET éventuels

            if ($current_page == $url) {
                echo 'active'; // ajoute la classe
            }
        }
        ?>
        <nav class="menu">
            <a class="<?php active('index.php'); ?>" id="acceuil" href="index.php">Accueil</a>
            <a class="<?php active('scores.php'); ?>" id="scores" href="Game/memory/scores.php">Scores</a>
            <a class="<?php active('ACS.php'); ?>" id="Profil" href="ACS.php">Profil</a>
            <a class="<?php active('html contact.php'); ?>" id="contact" href="html contact.php">Nous contacter</a>
        </nav>
    </div>
</header>


