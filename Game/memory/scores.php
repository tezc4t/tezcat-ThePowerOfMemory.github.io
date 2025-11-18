
<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href="scores.css">
<?php
$title = "Scores";
$baseHref = "../../"; 
include __DIR__ . '/../../partials/headjs.php';
?>
<body>
<link rel="stylesheet" href="scores.css">
    <?php include __DIR__ . '/../../partials/headerjs.php'; ?>
    
    <?php
    // données de score
    $scores = [
        ['id' => 1, 'game' => 'The power of memory', 'player' => 'John Doe', 'difficulty' => 'Difficile', 'score' => '1m26', 'date' => '2025/09/28'],
        ['id' => 2, 'game' => 'The power of memory', 'player' => 'Joueur 2', 'difficulty' => 'Difficile', 'score' => '1m28', 'date' => '2025/09/27'],
        ['id' => 3, 'game' => 'The power of memory', 'player' => 'Joueur 3', 'difficulty' => 'Moyenne', 'score' => '1m30', 'date' => '2025/09/26'],
        ['id' => 4, 'game' => 'The power of memory', 'player' => 'Joueur 4', 'difficulty' => 'Facile', 'score' => '1m35', 'date' => '2025/09/25'],
        ['id' => 5, 'game' => 'The power of memory', 'player' => 'Joueur 5', 'difficulty' => 'Difficile', 'score' => '1m45', 'date' => '2025/09/24'],
    ];

    // récupérer les scores et difficulté
    $search = isset($_GET['search']) ? trim($_GET['search']) : '';
    $difficulty = isset($_GET['difficulty']) ? $_GET['difficulty'] : 'all';

    // filtrer les scores
    $filtered_scores = array_filter($scores, function($score) use ($search, $difficulty) {
        $name_match = empty($search) || stripos($score['player'], $search) !== false;
        $difficulty_match = $difficulty === 'all' || strtolower($score['difficulty']) === strtolower($difficulty);
        return $name_match && $difficulty_match;
    });
    ?>
    
    <div class="intro-jeu">
        <h1>Score Of The Power of Memory</h1>
        <p>Tentez de battre nos meilleurs joueurs avec le moins de temps possible !</p>
    </div>
   <div class="scoreboard">
        <form method="GET" class="scoreboard-controls">
            <label id="SRC" for="search">Rechercher </label>
            <input type="text" id="search" name="search" value="<?= htmlspecialchars($search) ?>">

            <label id="SRC" for="difficulty">Difficulté :</label>
            <select id="difficulty" name="difficulty">
                <option value="all" <?= $difficulty === 'all' ? 'selected' : '' ?>>Toutes</option>
                <option value="facile" <?= $difficulty === 'facile' ? 'selected' : '' ?>>Facile</option>
                <option value="moyenne" <?= $difficulty === 'moyenne' ? 'selected' : '' ?>>Moyenne</option>
                <option value="difficile" <?= $difficulty === 'difficile' ? 'selected' : '' ?>>Difficile</option>
            </select> 
            <button type="submit" class="filter-button">Filtrer</button>
        </form>

        <table class="scores-table">
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
            <?php if (empty($filtered_scores)): ?>
                <tr>
                    <td colspan="6" class="no-results">Aucun résultat trouvé</td>
                </tr>
            <?php else: ?>
                <?php foreach ($filtered_scores as $score): ?>
                <tr>
                    <td><?= htmlspecialchars($score['id']) ?></td>
                    <td><img id="f" src="<?= $baseHref ?>img/truememory.jpg" alt="memory game"> <?= htmlspecialchars($score['game']) ?></td>
                    <td><?= htmlspecialchars($score['player']) ?></td>
                    <td><?= htmlspecialchars($score['difficulty']) ?></td>
                    <td><?= htmlspecialchars($score['score']) ?></td>
                    <td><?= htmlspecialchars($score['date']) ?></td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div class="section-container">
        <div class="texte-gauche">
            <h3 class="sous-titre">Envie de Contester un titre <br> ou une place ?</h3>
            <p class="corps">Venez alors vous affronter pour tenter de gravir les échellons dans nos différents jeux , tous compétitifs et encourageants a la réflexion !</p>
              <a href="<?= $baseHref ?>Game/memory/pagejeux.php" class="btn-jouer">Jouer</a>
        </div>
      <div class="image-droite">
          <img src="<?= $baseHref ?>img/manette.jpg" alt="manette">
      </div>
    </div>
        
   
</body>
<?php
include __DIR__ . '/../../partials/footer.php'; // inclusion du footer
?>

</html>