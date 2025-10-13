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
INSERT INTO jeu VALUES(
    1,
    "Power Of Memory"
)

