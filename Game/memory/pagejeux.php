<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="pagejeux.css">

    <?php include '../../partials/headjs.php'; ?>
    <?php include '../../utils/fonctionjs.php'; ?>
</head>

<body>
    <?php include '../../partials/headerjs.php'; ?>
        
    <div class="intro-jeu">
        <h1>Bienvenue dans The Power of Memory</h1>
        <p>Testez votre mémoire avec nos grilles de cartes et tentez de battre les meilleurs scores !</p>
    </div>
    <div class="container">
        <div class="controls">
        <label for="grid-size">Taille de la grille</label>
        <select id="grid-size">
            <option value="4x4">4x4</option>
            <option value="6x6">6x6</option>
            <option value="8x8">8x8</option>
        </select>

        <label for="theme">Thème</label>
        <select id="theme">
            <option value="jeux_video">JeuxVidéo</option>
            <option value="animaux">Animaux</option>
            <option value="nourriture">Nourriture</option>
        </select>

        <button id="generate">Générer une grille</button>
        <p>timer : </p>
        <p id="timer"></p>
        </div>

        <div class="grid" id="grid"></div>


<style type="text/css">
<!--
body{
background: url(images/<?php echo $selectedBg; ?>) no-repeat;
}
-->
</style>



    </div>
    <div class="section-container">
        <div class="texte-gauche">
            <h3 class="sous-titre">KCULTURE INFO</h3>
            <p class="corps">Venez decouvrir  notre tout nouveau Jeu de culture informatique, présenté sous formes de questions reponses "battle royale" à la maniere d'un Maitre des Fleurs</p>
            <a href="pagejeux.html" class="btn-jouer">Jouer</a>
        </div>
        <div class="image-droite">
            <img src="../../img/manette.jpg" alt="silksong">
        </div>
    </div>
            <!-- Fenêtre de Chat -->
            <div class="chat-panel">
        <div class="chat-header">Power Of Memory - Chat</div>

        <div class="chat-messages" id="messages">
            <!-- Messages dynamiques -->
        </div>

        <div class="chat-input">
            <input type="text" id="chat-message" placeholder="Écrire un message...">
            <button id="chat-send">Envoyer</button>
        </div>
    </div>
        
</body>
<?php
include '../../partials/footer.php'; // inclusion du footer
?>
<script src="../../Game/memory/jeux.js"></script>   
</html>
