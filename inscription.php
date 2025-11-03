<!DOCTYPE html>
<!--- Define the page as a html web page--->
<html lang="fr">

<body>
    <div class="all" >
        <a href="accueil.html" ><button id="AC"><img src="img/buttonhome.jpg"></button></a><!---define home button--->
        <a href="index.html"><button id="home"><img src="img/buttonprofil.jpg"></button></a><!---define redirection button to index.html--->
        <a href="inscription.html"><button id="INSCR"><img src="img/buttonprofil.jpg"></button></a><!---define redirection button to inscription.html--->
        <div class="container" ><!---define the container class for the first div--->
            <header>
                <h1 id="titremain">Bienvenu Chez Nous !</h1><!---define main title and second title--->
                <h2 id="titresecond">inscrivez vous pour jouer a vos <br> jeux préférés !</h2>
            </header>
            <figcaption id="titre_input" >Email</figcaption><!---define the forms for inscription--->
            <input id="text" type="text" placeholder ="Exemple@gmail.com" >
            <figcaption id="titre_input" >Mot de passe</figcaption>
            <input id="text" type="text" placeholder="8 caracteres differents" >
            <figcaption id="titre_input" >Confirmer le Mot de passe</figcaption>
            <input id="text" type="text" placeholder="8 caracteres differents" >
            <button id="login1">inscription</button><!---redirection for Index.html(connexion) page--->
            <figcaption id="ou"> ou</figcaption>
            <a href="https://www.google.com/?hl=fr" id="login2"><img id="google" src="img/google-nouveau-logo-g-removebg-preview (1).png" alt="google"><figcaption id="fig2">s'inscrire avec  google</figcaption></a>
            <figcaption id="pasdecompte"> un compte? <a href="index.html" id="create">je me connecte</a></figcaption><!---redirection for google inscription page--->

        </div>
        <div class="image" ><!---img on the right page--->
            <img id="jspencore" src="img/video_game.jpg" alt="img">
        </div>
        

    </div>
</body>
</html>
