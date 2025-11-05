<?php require 'utils/fonctions-accueil.php'; ?>

<!DOCTYPE html>

<html lang="fr">
    <head>
<head>
    <link rel="stylesheet" href="acceuil.css">
    <link rel="stylesheet" href="header.css">
    <?php include 'partials/head.php'; ?>
</head>


<body>
<?php include 'partials/header.php'; ?>
        
    <div id="div1">
        <p id="exclu">
            Nouveauté ! 
        </p>
        <h2 id="Titre-jeu">
            Power <br> Of <br> Mémory 
        </h2>
        <p id="paragraphe-pres">
            découvrez Power Of Mémory, un jeu inspiré du jeu de carte mémory.
        </p>
        <button type="Button" id="bouton-commencer">
            <a href="Game/memory/pagejeux.php"><figcaption> Commencer !</figcaption></a> 
        </button>
    </div>
    <div id="div2">
        <h3 id="liste-jeux">
            <strong>
                Nos jeux
            </strong>
        </h3>
        <div class="container-boutons">
            <a href="" id="bouton-memory"><img id="logo-manette" src="img/truememory.jpg" alt="logo memory"><p id="jeu2-figcap"><strong>Power Of Memory</strong></p></a>
            <a href="" id="bouton-jeu"><img id="logo-manette" src="img/manette.jpg" alt="logo jeu2"><p id="jeu2-figcap"><b>Jeux #2</b></p></a>
            <a href="" id="bouton-jeu"><img id="logo-manette" src="img/manette.jpg" alt="logo jeu3"><p id="jeu3-figcap"><b>Jeux #3</b></p></a>
        <div class="bouton-container"></div>
    </div>
    <div id="div3">
        <h3 id="gros-text">
            jouez aux jeux memory games
        </h3>
        <h3 id="petit-text">
            un moyen d'entrainer votre cerveau
        </h3>
        <p id="petit-text">
            jouez à nos jeux pour vous entrainer, que ce soit vos reflex ou votre mémoire<br> et essayez d'obtenir le meilleur score possible !
        </p>
    </div>
    <div id="div4">
        <h3>
            Power Of Memory a eu communauté active !
        </h3>
        <p>
            voici quelques statistique concernant celle ci.
        </p>
        <table id="ligne1">
            <td class="stat" id="stat1">
                <p class="nb-stat">
                    <?php echo getScore(); ?>
                </p>
                <p class="stat-text">
                    Parties Jouées
                </p>
            </td>
            <td class="stat" id="stat2">
                <p class="nb-stat">
                    <?php
                        echo"1020"
                    ?>
                </p>
                <p class="stat-text">
                    Joueurs Connectés
                </p>
            </td>
            <td class="stat" id="stat3">
                <p class="nb-stat">
                    <?php
                        echo lowScore() . "s";
                    ?>
                </p>
                <p class="stat-text">
                    Temps Records
                </p>
            </td>
        </table>
        <table id="ligne2">
            <td class="stat" id="stat4">
                <p class="nb-stat">
                    <?php
                        echo nbutilisateur();
                    ?>
                </p>
                <p class="stat-text">
                    Joueurs Inscrits
                </p>
            </td>
            <td class="stat" id="stat5">
                <p class="nb-stat">
                    <?php
                        echo nbscorebattu();
                    ?>
                </p>
                <p class="stat-text">
                    Records battu auourd'hui
                </p>
            </td>
            </tr>
        </table>
    </div>
    <div id="div5">
        <h3 id="j-ai-plus-d-id">
            Notre équipe
        </h3>
        <p id="j-ai-plus-d-id">
            découvrez notre équipe de choc !
        </p>
        <table id="ligne1">
            <td>
                <a>
                    <img src="img/pp.png" alt="membre1">
                    <figcaption>
                         Nathan
                    </figcaption>
                </a>
            </td>
            <td>
                <a>
                    <img src="img/pp.png" alt="membre2">
                    <figcaption>
                        Kyllian
                    </figcaption>
                </a>
            </td>
            <td>
                <a>
                    <img src="img/pp.png" alt="membre3">
                    <figcaption>
                        Thomas
                    </figcaption>
                </a>
            </td>
        </table>
        <table id="ligne2">
            <td>
                <a>
                    <img src="img/pp.png" alt="membre4">
                    <figcaption>
                        Max
                    </figcaption>
                </a>
            </td>
            <td>
                <a>
                    <img src="img/pp.png" alt="membre5">
                    <figcaption>
                        membre #5
                    </figcaption>
                </a>
            </td>
        </table>
    </div>
    <div id="div6">
        <h3>
            Suivez nous !
        </h3>
        <p>
            abonnez-vous à notre news-letter pour rester informer.
        </p>
        <table id="boite-blanche">
            <td>
                <h3 id="text-noire">
                    Restez informé
                </h3>
                <p id="text-noire">
                    pour être prévenu des nouveauté en premier entrez votre adresse email
                </p>
            </td>
            <td id="adresse mail">
                <input type="text" placeholder="adresse email">
                <button type="text" id="valider">
                    Valider
                </button>
            </td>
        </table>
    </div>
</body>
<?php
include 'partials/footer.php'; // inclusion du footer   
?>  
</html>
