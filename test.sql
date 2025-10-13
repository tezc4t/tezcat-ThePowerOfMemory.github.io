CREATE TABLE utilisateur(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    Pseudo VARCHAR(40) NOT NULL,
    EMAIL VARCHAR(40) NOT NULL,
    MDP VARCHAR(40) NOT NULL,
    created_at DATETIME NOT NULL,
    PRIMARY KEY(id)
)

INSERT INTO inscription('Pseudo','EMAIL','MDP')
value('tezcat','tezcat.auguste@gmail.com','tezcat')



CREATE TABLE score(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED NOT NULL,
    game_id INT UNSIGNED NOT NULL,
    difficulty ENUM('1','2','3'),
    score TIME,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
)

CREATE TABLE message(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    game_id INT UNSIGNED NOT NULL,
    user_id INT UNSIGNED NOT NULL,
    message VARCHAR(200),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
)

CREATE TABLE jeu (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nom_du_jeu VARCHAR(20),
    PRIMARY KEY(id)
)
INSERT INTO jeu VALUES(
    1,
    "Power Of Memory"
)
