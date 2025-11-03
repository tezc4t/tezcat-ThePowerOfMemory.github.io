<!DOCTYPE html>

<!DOCTYPE html>

<html lang="fr">
<?php
$title = "ACS";
$cssFile = "ACS.css"; // Feuille de style principale
include 'partials/head_ACS.php'; // inclusion du <head>
include 'partials/header.php'; // inclusion du header
?>


<body>
    <div class="container">
        <h1>Gestion du Compte</h1>

        <div class="account-info">
            <h2>Informations actuelles</h2>
            <p><strong>Nom :</strong> Kyllian Nouh</p>
            <p><strong>Email :</strong> Kyllian.Nouh@gmail.com</p>
        </div>

        <form class="account-form">
            <h2>Modifier les informations</h2>
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" placeholder="Entrez votre nom">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Entrez votre email">

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Nouveau mot de passe">

            <div class="buttons">
                <button type="submit">Mettre à jour</button>
                <button type="button" class="delete">Supprimer le compte</button>
            </div>
        </form>
    </div>
</body>
<?php
include 'partials/footer.php'; // inclusion du footer
?>

</html>