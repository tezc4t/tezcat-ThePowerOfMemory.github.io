<!DOCTYPE html>

<!DOCTYPE html>

<html lang="fr">
<link rel="stylesheet" href="ACS.css">

    <body>
        <div class="container">
            <h1>Gestion du Compte</h1>

            <div class="account-info">
                <h2>Informations actuelles</h2>
                <p><strong>Nom :</strong> Jean Dupont</p>
                <p><strong>Email :</strong> jean.dupont@email.com</p>
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

</html>