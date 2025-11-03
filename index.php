<!DOCTYPE html>
<!--- Define the page as a html web page--->
<html lang="fr">
<?php
$title = "Index";
$cssFile = "styles.css"; // Feuille de style principale
include 'partials/head.php';
?>
<body>
    <div class="all" >
        <a href="accueil.php" ><button id="AC"><img src="img/buttonhome.jpg"></button></a><!---define home button--->
        <a href="index.php"><button id="home"><img src="img/buttonprofil.jpg"></button></a><!---define redirection button to index.html--->
        <a href="inscription.php"><button id="INSCR"><img src="img/buttonprofil.jpg"></button></a><!---define redirection button to inscription.html--->
        <div class="container" ><!---define the container class for the first div--->
            <header>
                <h1 id="titremain">Heureux de vous revoir</h1><!---define main title and second title--->
                <h2 id="titresecond">En esperant que vous vous amuserez !</h2>
            </header>
            <figcaption id="titre_input" >Email</figcaption> <!---define the forms for connexion--->
            <input id="text" type="text" placeholder ="Exemple@gmail.com" >
            <figcaption id="titre_input" >Mot de passe</figcaption>
            <input id="text" type="text" placeholder="8 caracteres differents" >
            <a id="mdpo" href="My Account.php">mot de passe oublié?</a><!---redirection for MyAccount.html(renitalisation) page--->
            <button id="login1">connexion</button>
            <figcaption id="ou"> ou</figcaption><!--- redirection for google ac connexion--->
            <a href="https://www.google.com/?hl=fr" id="login2"><img id="google" src="img/google-nouveau-logo-g-removebg-preview (1).png" alt="google"><figcaption id="fig2">se connecter a google</figcaption></a>
            <figcaption id="pasdecompte"> pas de compte? <a href="inscription.php" id="create">je m'inscris</a></figcaption>
        

        </div><!---img on the right--->
        <div class="image" >
            <img id="jspencore" src="img/video_game.jpg" alt="img">
        </div>
        

    </div>
</body>
</html>
