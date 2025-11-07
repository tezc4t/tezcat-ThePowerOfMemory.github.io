<?php
    session_start();
    require 'utils/fonctions-header.php';
?>
<header>
    <div class="header-container">
        <p>
            <a href="index.php">
                <img src="img/LOGOS.png" alt="logo">
            </a>
        </p>

        <nav class="menu">
            <a class="<?php active('accueil.php'); ?>" id="accueil" href="accueil.php">Accueil</a>
            <a class="<?php active('scores.php'); ?>" id="scores" href="Game/memory/scores.php">Scores</a>
            <a class="<?php active('ACS.php'); ?>" id="Profil" href="ACS.php">
                <?php
                    echo affichernom(); // affiche le pseudo du compte connecté
                ?>
            </a>
            <a class="<?php active('html contact.php'); ?>" id="contact" href="html contact.php">Nous contacter</a>
        </nav>
    </div>
</header>