<!DOCTYPE html>

<<<<<<< Updated upstream

<?php
$title = "Index";
$cssFile = "Game/memory/pagejeux.css"; // Feuille de style principale
include 'partials/head_pagejeux.php'; // inclusion du <head>
include 'partials/header.php'; // inclusion du header
?>
   
    
<body>
=======
<head>
    <link rel="stylesheet" href="pagejeux.css">

    <?php include '../../partials/headjs.php'; ?>
    <?php include '../../utils/fonctionjs.php'; ?>
</head>

<body>
<?php include '../../partials/headerjs.php'; ?>
>>>>>>> Stashed changes
        
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
            <option value="JeuxVidéo">JeuxVidéo</option>
            <option value="Animaux">Animaux</option>
            <option value="Nourriture">Nourriture</option>
        </select>

        <button id="generate">Générer une grille</button>
        <p>timer : </p>
        <p id="timer"></p>
        </div>

<<<<<<< Updated upstream
        <div class="grid">
            <!-- 16 images de manettes -->
            <div class="cell"><img src="img/card1.jpg" alt="Manette"></div>
            <div class="cell"><img src="img/card1.jpg" alt="Manette"></div>
            <div class="cell"><img src="img/card1.jpg" alt="Manette"></div>
            <div class="cell"><img src="img/card1.jpg" alt="Manette"></div>
            <div class="cell"><img src="img/card1.jpg" alt="Manette"></div>
            <div class="cell"><img src="img\j n64.jpg" alt="Manette"></div>
            <div class="cell"><img src="img/card1.jpg" alt="Manette"></div>
            <div class="cell"><img src="img/card1.jpg" alt="Manette"></div>
            <div class="cell"><img src="img/card1.jpg" alt="Manette"></div>
            <div class="cell"><img src="img/card1.jpg" alt="Manette"></div>
            <div class="cell"><img src="img/card1.jpg" alt="Manette"></div>
            <div class="cell"><img src="img/card1.jpg" alt="Manette"></div>
            <div class="cell"><img src="img/card1.jpg" alt="Manette"></div>
            <div class="cell"><img src="img/card1.jpg" alt="Manette"></div>
            <div class="cell"><img src="img\j n64.jpg" alt="Manette"></div>
            <div class="cell"><img src="img/card1.jpg" alt="Manette"></div>
        </div>
=======
        <div class="grid" id="grid"></div>

>>>>>>> Stashed changes
    </div>
    <div class="section-container">
        <div class="texte-gauche">
            <h3 class="sous-titre">KCULTURE INFO</h3>
            <p class="corps">Venez decouvrir  notre tout nouveau Jeu de culture informatique, présenté sous formes de questions reponses "battle royale" à la maniere d'un Maitre des Fleurs</p>
            <a href="pagejeux.html" class="btn-jouer">Jouer</a>
        </div>
        <div class="image-droite">
            <img src="img/manette.jpg" alt="silksong">
        </div>
    </div>
<<<<<<< Updated upstream
    <aside class="chat-panel" aria-label="Espace de chat">
        <header class="chat-header">
            <div>
                <div>Power Of Memory</div>
            </div>
        </header>
        <div class="messages">
            <div class="msg bot">Encore Gagné.</div>
            <div class="msg user">Je vais te battre.</div>
=======
        <!-- Fenêtre de Chat -->
    <div class="chat-panel">
        <div class="chat-header">Power Of Memory - Chat</div>

        <div class="chat-messages" id="messages">
            <!-- Messages dynamiques -->
>>>>>>> Stashed changes
        </div>

        <div class="chat-input">
            <input type="text" id="chat-message" placeholder="Écrire un message...">
            <button id="chat-send">Envoyer</button>
        </div>
    </div>

</body>

<?php
<<<<<<< Updated upstream
include 'partials/footer.php'; // inclusion du footer
?>
    
</html>
=======
include '../../partials/footer.php';
?>

<script src="../../Game/memory/jeux.js"></script> 
</html>
>>>>>>> Stashed changes
