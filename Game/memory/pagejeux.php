<!DOCTYPE html>

<head>
<?php
$title = "Index";
include '../../partials/headgame.php';
?>
<link rel="stylesheet" href="pagejeux.css">
<link rel="stylesheet" href="../../header.css">
</head>
<body>
    <?php
        include '../../partials/headergame.php'; // inclusion du header
    ?>
        
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
        <P>timer :</p>
        <p id="timer"></p>
        </div>
        <div class="grid" id="grid"></div>
    </div>
    <div class="section-container">
        <div class="texte-gauche">
            <h3 class="sous-titre">KCULTURE INFO</h3>
            <p class="corps">Venez decouvrir  notre tout nouveau Jeu de culture informatique, présenté sous formes de questions reponses "battle royale" à la maniere d'un Maitre des Fleurs</p>
            <a href="pagejeux.php" class="btn-jouer">Jouer</a>
        </div>
        <div class="image-droite">
            <img src="../../img/manette.jpg" alt="silksong">
        </div>
    </div>
        <script>
    // partie simple
    const USER_ID = <?= json_encode($_SESSION['user_id'] ?? 0) ?>;
    const chatBody = document.querySelector('.chat-body');
    const chatInput = document.querySelector('.chat-input input');

    const chatToggle = document.getElementById('chat-toggle');
    const chatBox = document.querySelector('.chatbox');


    // partie complex
    // chatbox hide
    chatBox.style.display = 'none';

    chatToggle.addEventListener('click', () => {
        const isOpen = chatBox.style.display === 'flex';
        chatBox.style.display = isOpen ? 'none' : 'flex';
        chatToggle.classList.toggle('open', !isOpen);
    });

    function loadMessages() {
        fetch("../../page.php?action=load")
        .then(res => res.json())
        .then(messages => {
            chatBody.innerHTML = "";
            messages.forEach(msg => { // boucle
                const isMe = msg.user_id == USER_ID;
                const isImage = /\.(gif|png|jpg|jpeg)$/i.test(msg.message);
                const content = isImage
                    ? `<img src="${msg.message}" class="chat-gif">`
                    : msg.message;

                chatBody.innerHTML += `
                    <div class="message ${isMe ? "right" : "left"}">
                        <span class="sender">${isMe ? "You" : msg.pseudo}</span>
                        <div class="bubble ${isMe ? "red" : ""}">
                            ${content}
                        </div>
                        <span class="time">${msg.created_at}</span>
                    </div>
                `;
            });
            chatBody.scrollTop = chatBody.scrollHeight;
        })
    }
    // sending message
    chatInput.addEventListener("keypress", function(e) {
        if (e.key === "Enter" && chatInput.value.trim() !== "") {
            fetch("../../page.php?action=send", {
                method: "POST",
                headers: {"Content-Type": "application/x-www-form-urlencoded"},
                body: "message=" + encodeURIComponent(chatInput.value)
            })
            .then(res => res.text())
            .then(text => {
                console.log('send response:', text);  // <-- ça montre si OK ou erreur
                chatInput.value = "";
                loadMessages();
            });
        }
    });

    // refresh

    setInterval(loadMessages, 10000);
    loadMessages();

    </script>
﻿
        
</body>
<?php
include '../../partials/footergame.php'; // inclusion du footer
?>
<script src="../../Game/memory/jeux.js"> </script> 
</html>