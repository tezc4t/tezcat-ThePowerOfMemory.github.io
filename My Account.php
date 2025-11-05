<!DOCTYPE html><!--- Define the page as a html web page--->
<html lang="fr">
<head>
    <link rel="stylesheet" href="styles.css">
    <?php include 'partials/head.php'; ?>
</head>


<body>
    <div class="all" >
        <a href="accueil.php" ><button id="AC"><img src="img/buttonhome.jpg"></button></a><!---Create a button that when cliked, send the user on the accueil page --->
        <a href="index.php"><button id="home"><img src="img/buttonprofil.jpg"></button></a><!---Create a button that when cliked, send the user on the home page--->
        <a href="inscription.php"><button id="INSCR"><img src="img/buttonprofil.jpg"></button></a><!---Create a button that when cliked, send the user on the inscription page--->
        <div class="container" >
            <header>
                <h1 id="titremain">Un Trou de mémoire?</h1>
                <h2 id="titresecond">On va vous aider. </h2>
            </header>
            <figcaption id="titre_input" >E-mail de renitialisation </figcaption><!---Input box where the user have to put his email--->
            <input id="text" type="text" placeholder ="Exemple@gmail.com" ><!---Input box where the user have to put his email--->
            <button id="login1">Demander un Code</button><!--- Create a button that send a code to reset the password to his acount  --->
            <figcaption id="ou"> ou</figcaption>
            <a href="https://www.google.com/?hl=fr" id="login2"><img id="google" src="img/google-nouveau-logo-g-removebg-preview (1).png" alt="google"><figcaption id="fig2">s'inscrire avec  google</figcaption></a><!--- Create a button that used the user google account to create his acount on the web site --->

           

        </div>
        <div class="image" >
            <img id="jspencore" src="img/video_game.jpg" alt="img"><!---Show the picture named facetoface.jpg on the side of the web page   --->
        </div>
        

    </div>
</body>
</html>