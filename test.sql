
---/TABLES/---
    --Table utilisateur--
CREATE TABLE utilisateur(
     id INT UNSIGNED NOT NULL AUTO_INCREMENT,
     Pseudo VARCHAR(256) NOT NULL,
     EMAIL VARCHAR(256) NOT NULL,
     MDP VARCHAR(256) NOT NULL,
     created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
     PRIMARY KEY(id)
)
    --FIN Table utilisateur--
    --Table score--
CREATE TABLE scores(
     id INT UNSIGNED NOT NULL AUTO_INCREMENT,
     user_id INT UNSIGNED NOT NULL,
     game_id INT UNSIGNED NOT NULL,
     difficulty ENUM('1','2','3'),
     score INT,
     created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
)
    --FIN Table score--
    --Table msg--
CREATE TABLE msg(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    game_id INT UNSIGNED NOT NULL,
    user_id INT UNSIGNED NOT NULL,
    message TEXT,
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
INSERT INTO utilisateur(Pseudo,EMAIL,MDP)
VALUES('tezcat','tezcat.auguste@gmail.com','tezcat'),
    ('maxatlas','max@pilato.fr','HDue98è§!98K'),
    ('Nathev','nahtan.blabla@truc.fr','KhbkuhIH!8'),
    ('Thomas','tomas.blublu@truc.fr','krj7§IjIJ8K'),
    ('Random','random.random@truc.fr','sjhfsIHO87§6');
    
    --FIN utilisateurs--
    --scores--
INSERT INTO scores (user_id, game_id, difficulty, score)
Values(5,1,'3',48),(2,1,'2',35)
    --FIN scores--
    --messages--
INSERT INTO msg (game_id, user_id, message)
VALUES(1,1,"salut à tous c’est ma 1re fois ici, qlq1 pour une partie ?"),
    (1,2,"yo bienvenue tezcat ! chaud pour une game"),
    (1,3,"salut, moi aussi j’suis opé, on lance ?"),
    (1,1,"go go go j’veux voir si j’ai encore une mémoire décente XD"),
    (1,5,"vous allez tous perdre >:) j’suis un pro du memory"),
    (1,1,"mdr Random le mec qui pose direct les bases lol"),
    (1,2,"tkt, y’a tjs + fort que soi... sauf moi"),
    (1,5,"allez on verra ça à la fin de la game"),
    (1,4,"j’dis ça j’dis rien mais j’ai jamais perdu ici"),
    (1,5,"oh le mytho Thomas, screen fait, je note"),
    (1,1,"j’viens de lancer une partie, qui me rejoint ?"),
    (1,2,"j’suis là, pseudo en jeu : maxatlas (original hein ?)"),
    (1,3,"c’est bon j’suis rentré aussi, Bonne chance !"),
    (1,4,"GL les noobs :D (je plaisante, un peu)"),
    (1,5,"allez j’arrive, j’vous laisse piocher les mauvaises paires"),
    (1,4,"Random j’espère que t’as la mémoire d’un éléphant"),
    (1,2,"ou celle d’un poisson rouge, on verra"),
    (1,3,"mdr vous me tuez, on dirait un jeu de bluff en fait"),
    (1,4,"c’est tjs comme ça ici, ça vanne plus que ça joue XD"),
    (1,5,"j’viens de win une partie en 48s hier, juste pr info"),
    (1,4,"bon bah pression là… j’me concentre"),
    (1,2,"allez on se focus, on papote après la win"),
    (1,3,"qui retourne la même case 3 fois ? c’est moi"),
    (1,2,"mdr Nathev on va t’offrir un GPS pour tes clics"),
    (1,5,"j’vous l’avais dit 1er. À qui le tour de perdre ?")
    --FIN messages--
    --jeu--
INSERT INTO jeu VALUES(
    1,
    "Power Of Memory"
)
    --FIN jeu--
---/FIN ELEMENTS DES TABLES/---
---/SELECTION D'ELEMENTS/---
    ---id utilisateur < email + mdp---
SELECT id FROM utilisateur 
WHERE EMAIL = '...' AND MDP = '...'
    ---FIN id utilisateur < email + mdp---
---/FIN SELECTION D'ELEMENTS/---
---MSG PRIVEE et données de test kyllian------
        
CREATE TABLE messagerie_privee (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    msg_id INT UNSIGNED NOT NULL,
    user_sender_id INT UNSIGNED NOT NULL,
    user_receiver_id INT UNSIGNED NOT NULL,
    msg TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    is_read TINYINT(1) DEFAULT 0,
    read_at DATETIME NULL,
    PRIMARY KEY (id)
)

-- Insertion des messages avec NOW() pour les dates
INSERT INTO messagerie_privee (user_sender_id, user_receiver_id, msg, is_read, read_at, created_at) 
VALUES
  (1, 2, 'Salut, comment ça va ?', 1, NOW(), NOW()),
  (2, 1, 'Ça va bien, merci ! Et toi ?', 1, NOW(), NOW()),
  (1, 3, 'Tu viens au jeu ce soir ?', 0, NULL, NOW()),
  (3, 1, 'Oui, à quelle heure ?', 0, NULL, NOW()),
  (2, 3, 'Nouveau niveau débloqué!', 1, NOW(), NOW()),
  (3, 2, 'Bravo pour ton score !', 0, NULL, NOW()),
  (1, 2, 'On se retrouve demain ?', 0, NULL, NOW()),
  (2, 1, 'Oui, à 20h !', 1, NOW(), NOW()),
  (3, 1, 'J’ai besoin d’aide sur ce niveau.', 1, NOW(), NOW()),
  (1, 3, 'Pas de problème, je t’aide.', 0, NULL, NOW()),
  (2, 3, 'Tu as vu la mise à jour ?', 0, NULL, NOW()),
  (3, 2, 'Oui, c’est top !', 1, NOW(), NOW()),
  (1, 2, 'Quel est ton meilleur score ?', 0, NULL, NOW()),
  (2, 1, 'Je crois que c’est 3000 points.', 1, NOW(), NOW()),
  (3, 1, 'On fait une équipe ?', 0, NULL, NOW()),
  (1, 3, 'Avec plaisir !', 0, NULL, NOW()),
  (2, 3, 'Rendez-vous en ligne à 19h.', 1, NOW(), NOW()),
  (3, 2, 'OK, je serai là.', 0, NULL, NOW()),
  (1, 2, 'Bonne chance pour le tournoi !', 1, NOW(), NOW()),
  (2, 1, 'Merci, à toi aussi !', 0, NULL, NOW());

-- Insertion des messages supplémentaires (sans msg_id)
INSERT INTO messagerie_privee (user_sender_id, user_receiver_id, msg, is_read, read_at, created_at)
VALUES
  (4, 5, 'mec on lance une game?', 1, NOW(), NOW()),
  (5, 4, 'cest parti lance', 1, NOW(), NOW());

--STORY 6--
SELECT nom_du_jeu,
pseudo,
difficulty,
score,
scores.created_at
FROM scores JOIN utilisateur ON user_id = utilisateur.id JOIN jeu ON game_id = jeu.id
ORDER BY nom_du_jeu, difficulty DESC, score
-- Mise à jour d’un message
UPDATE messagerie_privee
SET msg = 'XD ON LANCE'
WHERE id = 21;

DELETE FROM messagerie_privee
WHERE id=21
--STORY 10------------------------------------------------

SELECT 
    message,
    Pseudo,
    msg.created_at,
    CASE 
        WHEN user_id = 1 THEN TRUE 
        ELSE FALSE 
    END AS isSender
FROM msg JOIN utilisateur ON user_id = utilisateur.id
WHERE msg.created_at >= NOW() - INTERVAL 1 DAY
 ORDER BY created_at ASC;
-----------------------------------------------------------
	
 ----STORY 13(repsecte mais a modifier pour php (valeurs "NOW" sur story 12)-----------------   
SELECT * FROM `u1` WHERE SELECT u1.pseudo AS sender, u2.pseudo AS receiver,
 p.msg, p.created_at,
user_sender_id + user_receiver_id AS conversation 
FROM messagerie_privee p 
JOIN utilisateur u1 ON p.user_sender_id = u1.id
JOIN utilisateur u2 ON p.user_receiver_id = u2.id
WHERE user_sender_id =1 OR user_receiver_id=1
GROUP BY conversation, u1.pseudo, u2.pseudo,
 p.msg, p.created_at 
ORDER BY p.created_at DESC
-------------------------------
    
-- Recherche de score par pseudo --
SELECT nom_du_jeu, user_id, difficulty, score, created_at
FROM scores JOIN utilisateur ON scores.user_id = utilisateur.id
JOIN jeu ON jeu.id = score.game_id
WHERE user_id LIKE '%%'
ORDER BY difficulty, score;

-- Mise a jour d'un score d'un joueur--
INSERT INTO score(user_id,game_id,difficulty,score)
VALUES(1,1,"3","38");

UPDATE score
SET score = "30"
WHERE user_id = 1

--STORY 15--
SELECT ("2025") as year, M.month,
(SELECT Pseudo FROM utilisateur 
 JOIN scores ON scores.user_id = utilisateur.id
 WHERE score = (SELECT MIN(score) FROM scores WHERE MONTH(scores.created_at) = M.month) 
 AND MONTH(scores.created_at) = M.month LIMIT 1) as "Top 1",
(SELECT Pseudo FROM utilisateur 
JOIN scores ON scores.user_id = utilisateur.id
WHERE score = (SELECT DISTINCT score FROM scores WHERE MONTH(scores.created_at) = M.month 
ORDER BY score ASC LIMIT 1 OFFSET 1) 
AND MONTH(scores.created_at) = M.month LIMIT 1) as "Top 2",
(SELECT Pseudo FROM utilisateur 
JOIN scores ON scores.user_id = utilisateur.id
WHERE score = (SELECT DISTINCT score FROM scores WHERE MONTH(scores.created_at) = M.month 
ORDER BY score ASC LIMIT 1 OFFSET 2) 
AND MONTH(scores.created_at) = M.month LIMIT 1) as "Top 3",
COUNT(scores.score) as "Total parties",
(SELECT nom_du_jeu FROM jeu WHERE COUNT(scores.score) = (SELECT MAX(COUNT(scores.score)))) as "Jeu le plus joué"
FROM (
	SELECT 1 as month UNION SELECT 2 as month UNION SELECT 3 as month UNION SELECT 4 as month UNION 
    SELECT 5 as month UNION SELECT 6 as month UNION SELECT 7 as month UNION SELECT 8 as month UNION 
    SELECT 9 as month UNION SELECT 10 as month UNION SELECT 11 as month UNION SELECT 12 as month
) as M
LEFT JOIN scores ON M.month = MONTH(scores.created_at)
LEFT JOIN utilisateur ON scores.user_id = utilisateur.id
LEFT JOIN jeu ON game_id = jeu.id
GROUP BY month

--STORY 16--
SELECT ("2025") as year, 
M.month,
COUNT(scores.score) as "Total parties",
(SELECT nom_du_jeu 
 FROM jeu 
 WHERE COUNT(scores.score) = (SELECT MAX(COUNT(scores.score)))) as "Jeu le plus joué",
(SELECT AVG(score) 
 FROM scores 
 WHERE user_id = 2 
 AND MONTH(created_at) = M.month 
 AND difficulty = (SELECT MAX(difficulty) FROM scores 
                   WHERE MONTH(created_at) = M.month )) as "Score moyen"
FROM (
	SELECT 1 as month UNION SELECT 2 as month UNION SELECT 3 as month UNION SELECT 4 as month UNION 
    SELECT 5 as month UNION SELECT 6 as month UNION SELECT 7 as month UNION SELECT 8 as month UNION 
    SELECT 9 as month UNION SELECT 10 as month UNION SELECT 11 as month UNION SELECT 12 as month
) as M
LEFT JOIN scores ON M.month = MONTH(scores.created_at)
LEFT JOIN utilisateur ON scores.user_id = utilisateur.id
LEFT JOIN jeu ON game_id = jeu.id
WHERE user_id ="2"
GROUP BY month

