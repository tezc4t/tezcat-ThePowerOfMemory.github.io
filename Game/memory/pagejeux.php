<?php
session_start();

// Inclure le fichier de connexion PDO
require_once(__DIR__ . '/../../utils/config.php');

 // ton fichier qui initialise $pdo

// Utiliser l'ID 1 pour cette page
$chosenUserId = 1;

// Récupérer l'utilisateur depuis la base
$stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE id = ?");
$stmt->execute([$chosenUserId]);
$user = $stmt->fetch();

if($user) {
    // Stocker l'ID seulement pour cette page
    $_SESSION['temp_user_id'] = $user['id'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>The Power of Memory</title>
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
                <option value="JeuxVidéo">JeuxVidéo</option>
                <option value="Animaux">Animaux</option>
                <option value="Nourriture">Nourriture</option>
            </select>

            <button id="generate">Générer une grille</button>
            <p>timer : </p>
            <p id="timer"></p>
        </div>

        <div class="grid" id="grid"></div>
    </div>

    <div class="section-container">
        <div class="texte-gauche">
            <h3 class="sous-titre">KCULTURE INFO</h3>
            <p class="corps">Venez découvrir notre tout nouveau Jeu de culture informatique, présenté sous forme de questions-réponses "battle royale" à la manière d'un Maître des Fleurs</p>
            <a href="pagejeux.html" class="btn-jouer">Jouer</a>
        </div>
        <div class="image-droite">
            <img src="../../img/manette.jpg" alt="silksong">
        </div>
    </div>
    <button id="toggle-chat" class="toggle-chat-btn">▼</button>
    

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

    <?php include '../../partials/footer.php'; // inclusion du footer ?>
    <script>
    // Injection de l'ID utilisateur depuis PHP vers JS
    const CURRENT_USER_ID = <?= json_encode($_SESSION['temp_user_id'] ?? null); ?>;

    </script>
    <script src="../../Game/memory/jeux.js"></script>
    <script>
console.log("CURRENT_USER_ID =", CURRENT_USER_ID);
</script>   
</body>
</html>
