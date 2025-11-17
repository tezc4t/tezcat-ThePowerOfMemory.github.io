
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="ACS.css">
    <link rel="stylesheet" href="Game/memory/scores.css">
    <link rel="stylesheet" href="header.css">

    <?php include 'partials/head.php'; ?>

</head>


<body>
<?php include 'partials/header.php'; ?>
    <div class="container">
        <h1>Gestion du Compte</h1>

        <div class="account-info">
            <img id='photoprofil' src="img/buttonprofil.jpg" alt="photo de profil">
            <p><strong>Nom :</strong> <?php echo affichernom() ?> </p>
            <p><strong>Email :</strong> <?php echo afficheremail() ?> </p>
        </div>

        <form class="account-form" action="utils/formulaire_ACS.php" method="POST"> <!-- formulaire pour changer les infos du compte -->
            <h2>Modifier les informations</h2>
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" placeholder="Entrez votre nom">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Entrez votre email">

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Nouveau mot de passe">

            <div class="buttons">
                <button type="submit">Mettre à jour</button> <!-- bouton pour enregistrer les changements -->
            </div>
        </form>
    </div>
</body>
<?php
include 'partials/footer.php'; // inclusion du footer
?>

</html>