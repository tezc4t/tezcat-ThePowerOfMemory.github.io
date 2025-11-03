<!DOCTYPE html>


<html lang="fr">
<?php
$title = "Scores";
$cssFile = "Game/memory/scores.css"; // Feuille de style principale
include 'partials/head_scores.php'; // inclusion du <head>
include 'partials/header.php'; // inclusion du header
?>
    
<body>
        
    <div class="intro-jeu">
        <h1>Score Of The Power of Memory</h1>
        <p>Tentez de battre nos meilleurs joueurs avec le moins de temps possible !</p>
    </div>
    <div class="scoreboard"><!--- Define the options and the scoreboard--->
        <table><!-- the scoreboard (JS AND PHP REQUIRED)-->
            <thead>
            <tr>
                <th>#</th>
                <th>Jeu</th>
                <th>Noms Joueurs</th>
                <th>Difficulté</th>
                <th>Score</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td><img id="f"src="img/truememory.jpg">The power of memory</td>
                <td>John Doe</td>
                <td>Difficile</td>
                <td>1m26</td>
                <td>2025/09/28</td>
            </tr>
            <tr>
                <td>2</td>
                <td><img id="f" src="img\truememory.jpg">The power of memory</td>
                <td>Joueur 2</td>
                <td>Difficile</td>
                <td>1m28</td>
                <td>2025/09/27</td>
            </tr>
            <tr>
                <td>3</td>
                <td><img id="f" src="img\truememory.jpg">The power of memory</td>
                <td>Joueur 3</td>
                <td>Difficile</td>
                <td>1m30</td>
                <td>2025/09/26</td>
            </tr>
            <tr>
                <td>4</td>
                <td><img id="f"src="img\truememory.jpg">The power of memory</td>
                <td>Joueur 4</td>
                <td>Difficile</td>
                <td>1m35</td>
                <td>2025/09/25</td>
            </tr>
            <tr>
                <td>5</td>
                <td><img id="f" src="img\truememory.jpg">The power of memory</td>
                <td>Joueur 5</td>
                <td>Difficile</td>
                <td>1m45</td>
                <td>2025/09/24</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="section-container">
        <div class="texte-gauche">
            <h3 class="sous-titre">Envie de Contester un titre <br> ou une place ?</h3>
            <p class="corps">Venez alors vous affronter pour tenter de gravir les échellons dans nos différents jeux , tous compétitifs et encourageants a la réflexion !</p>
            <a href="pagejeux.html" class="btn-jouer">Jouer</a>
        </div>
        <div class="image-droite">
            <img src="img/manette.jpg" alt="silksong">
        </div>
    </div>
        
   
</body>
<?php
include 'partials/footer.php'; // inclusion du footer
?>

</html>






