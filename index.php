<?php
    session_start();
?>


<!DOCTYPE html>
<!--- Define the page as a html web page--->
<html lang="fr">
<head>
    <link rel="stylesheet" href="styles.css">
    <?php 
    include 'partials/head.php';
    ?>
</head>


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
            <form action="utils/fonctions-connection.php" method="POST"> <!---define the forms for connexion--->
                <figcaption id="titre_input" >Email</figcaption> 
                <input id="text" type="text" name="email" placeholder ="Exemple@gmail.com" >
                <figcaption id="titre_input" >Mot de passe</figcaption>
                <input id="text" type="text" name="mdp" placeholder="8 caracteres differents" >
                <?php 
                    echo $_SESSION['mvsmdp']; // message d'erreur si compte inexistant
                ?>
                <a id="mdpo" href="My Account.php">mot de passe oublié?</a><!---redirection for MyAccount.html(renitalisation) page--->
                <button id="login1" type = "submit">connexion</button>
                <figcaption id="ou"> ou</figcaption><!--- redirection for google ac connexion--->
                <a href="https://www.google.com/?hl=fr" id="login2"><img id="google" src="img/google-nouveau-logo-g-removebg-preview (1).png" alt="google"><figcaption id="fig2">se connecter a google</figcaption></a>
                <figcaption id="pasdecompte"> pas de compte? <a href="inscription.php" id="create">je m'inscris</a></figcaption>
            </form>

        </div><!---img on the right--->
        <div class="image" >
            <img id="jspencore" src="img/video_game.jpg" alt="img">
        </div>
        

    </div>
</body>
</html>
