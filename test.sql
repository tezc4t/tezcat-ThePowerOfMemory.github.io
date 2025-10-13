
---/TABLES/---
--Table utilisateur--
CREATE TABLE utilisateur(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    Pseudo VARCHAR(40) NOT NULL,
    EMAIL VARCHAR(40) NOT NULL,
    MDP VARCHAR(40) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
)
--FIN Table utilisateur--
--Table score--
CREATE TABLE score(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED NOT NULL,
    game_id INT UNSIGNED NOT NULL,
    difficulty ENUM('1','2','3'),
    score TIME,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
)
--FIN Table score--
--Table msg--
CREATE TABLE msg(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    game_id INT UNSIGNED NOT NULL,
    user_id INT UNSIGNED NOT NULL,
    commentaire TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
)
--FIN Table msg--
--Table jeu--
CREATE TABLE jeu (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nom_du_jeu VARCHAR(20),
    PRIMARY KEY(id)
)
--FIN Table jeu--
---/FIN TABLES/---
---/ELEMENTS DES TABLES/---
--utilisateurs--
INSERT INTO utilisateur('Pseudo','EMAIL','MDP'),
value('tezcat','tezcat.auguste@gmail.com','tezcat'),
    ('maxatlas','max@pilato.fr','HDue98è§!98K'),
    ('Nathev','nahtan.blabla@truc.fr','KhbkuhIH!8'),
    ('Thomas','tomas.blublu@truc.fr','krj7§IjIJ8K'),
    ('Random','random.random@truc.fr','sjhfsIHO87§6');

--FIN utilisateurs--
--jeu--
INSERT INTO jeu VALUES(
    1,
    "Power Of Memory"
)
--FIN jeu--
---/FIN ELEMENTS DES TABLES/---


INSERT INTO msg (game_id,user_id,Commentaire text)
VALUES(Power_of_Memory,1,"gg" )
