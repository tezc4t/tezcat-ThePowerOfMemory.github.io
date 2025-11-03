<header>
    <div class="header-container">
        <p>
            <a href="index.html">
                <img src="img/LOGOS.png" alt="logo">
            </a>
        </p>
        <nav class="menu">
            <a id="acceuil" href="index.html">Accueil</a>
            <a id="scores" href="scores.html">Scores</a>
            <a id="Profil" href="ACS.html">Profil</a>
            <a href="html contact.html" id="contact">Nous contacter</a>
        </nav>
    </div>
</header>


<? $position = $_SERVER['PHP_SELF'];

    $Nomfichier = basename($position);

    echo "Le fichier exécuté est : " . $nomFichier;
?>