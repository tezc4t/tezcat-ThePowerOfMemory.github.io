<!DOCTYPE html>
<!--- Define the page as a html web page--->
<html lang="fr">
<head>
    <link rel="stylesheet" href="styles.css">
    <?php include 'partials/head.php'; ?>
</head> 


<body>
    <div class="all" >
        <a href="accueil.php" ><button id="AC"><img src="img/buttonhome.jpg"></button></a><!---define home button--->
        <a href="index.php"><button id="home"><img src="img/buttonprofil.jpg"></button></a><!---define redirection button to index.html--->
        <a href="inscription.php"><button id="INSCR"><img src="img/buttonprofil.jpg"></button></a><!---define redirection button to inscription.html--->
        <div class="container" ><!---define the container class for the first div--->
            <header>
                <h1 id="titremain">Bienvenu Chez Nous !</h1><!---define main title and second title--->
                <h2 id="titresecond">inscrivez vous pour jouer a vos <br> jeux préférés !</h2>
            </header>
            <form id="inscription" class="auth-form">


                <label for="email" >Email</label><!---define the forms for inscription--->
                <input id="email" class="auth-field" name="email" type="text" placeholder ="Exemple@gmail.com" required>

                <label for="pseudo" >Pseudo</label><!---define the forms for inscription--->
                <input id="pseudo" class="auth-field" name="pseudo" type="text" placeholder ="Votre pseudo" required>


                <label for="motdepasse" >Mot de passe</label>
                <input id="motdepasse" class="auth-field" name="motdepasse" type="text" placeholder="8 caracteres minimum" required>


                <div id="strength-bar"></div>
                <p id="strength-text"></p>


                <label for="confirmermotdepasse" >Confirmer le Mot de passe</label>
                <input id="confirmermotdepasse" class="auth-field" type="text" placeholder="8 caracteres differents" required>


                <button id="login1">inscription</button><!---redirection for Index.html(connexion) page--->
                <p id="ou"> ou</p>
                <button type="submit" href="https://www.google.com/?hl=fr" id="login2"><img id="google" src="img/google-nouveau-logo-g-removebg-preview (1).png" alt="google"><p id="fig2">s'inscrire avec  google</p></button>
                <p id="pasdecompte"> un compte? <a type="submit" href="index.php" id="create">je me connecte</a></p><!---redirection for google inscription page--->
            </form>
        </div>
        <div class="image" ><!---img on the right page--->
            <img id="jspencore" src="img/video_game.jpg" alt="img">
        </div>
        

    </div>

    <script src="script.js"></script>
</body>
</html>
