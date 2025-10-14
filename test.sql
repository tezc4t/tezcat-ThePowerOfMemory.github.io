
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
    CREATE TABLE scores(
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
    INSERT INTO utilisateur('Pseudo','EMAIL','MDP'),
    VALUES('tezcat','tezcat.auguste@gmail.com','tezcat'),
        ('maxatlas','max@pilato.fr','HDue98è§!98K'),
        ('Nathev','nahtan.blabla@truc.fr','KhbkuhIH!8'),
        ('Thomas','tomas.blublu@truc.fr','krj7§IjIJ8K'),
        ('Random','random.random@truc.fr','sjhfsIHO87§6');
    
    --FIN utilisateurs--
    --scores--
    INSERT INTO score (user_id, game_id, difficulty, score)
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
INSERT INTO msg (game_id,user_id,Commentaire text)
VALUES(Power_of_Memory,1,"gg" )


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

INSERT INTO messagerie_privee (msg_id, user_sender_id, user_receiver_id, msg, is_read, read_at, created_at) 
VALUES(1, 1, 2, 'Salut, comment ça va ?', 1, '2025-10-14 09:15:00', '2025-10-14 09:00:00'),
    (2, 2, 1, 'Ça va bien, merci ! Et toi ?', 1, '2025-10-14 09:16:30', '2025-10-14 09:05:00'),
    (3, 1, 3, 'Tu viens au jeu ce soir ?', 0, NULL, '2025-10-14 09:10:00'),
    (4, 3, 1, 'Oui, à quelle heure ?', 0, NULL, '2025-10-14 09:12:00'),
    (5, 2, 3, 'Nouveau niveau débloqué!', 1, '2025-10-13 18:00:00', '2025-10-13 17:50:00'),
    (6, 3, 2, 'Bravo pour ton score !', 0, NULL, '2025-10-14 09:20:00'),
    (7, 1, 2, 'On se retrouve demain ?', 0, NULL, '2025-10-14 09:25:00'),
    (8, 2, 1, 'Oui, à 20h !', 1, '2025-10-14 09:26:00', '2025-10-14 09:23:00'),
    (9, 3, 1, 'J’ai besoin d’aide sur ce niveau.', 1, '2025-10-14 10:00:00', '2025-10-14 09:55:00'),
    (10, 1, 3, 'Pas de problème, je t’aide.', 0, NULL, '2025-10-14 09:57:00'),
    (11, 2, 3, 'Tu as vu la mise à jour ?', 0, NULL, '2025-10-14 10:10:00'),
    (12, 3, 2, 'Oui, c’est top !', 1, '2025-10-14 10:15:00', '2025-10-14 10:12:00'),
    (13, 1, 2, 'Quel est ton meilleur score ?', 0, NULL, '2025-10-14 10:20:00'),
    (14, 2, 1, 'Je crois que c’est 3000 points.', 1, '2025-10-14 11:30:00', '2025-10-14 10:25:00'),
    (15, 3, 1, 'On fait une équipe ?', 0, NULL, '2025-10-14 10:30:00'),
    (16, 1, 3, 'Avec plaisir !', 0, NULL, '2025-10-14 10:35:00'),
    (17, 2, 3, 'Rendez-vous en ligne à 19h.', 1, '2025-10-13 17:45:00', '2025-10-13 17:40:00'),
    (18, 3, 2, 'OK, je serai là.', 0, NULL, '2025-10-14 10:40:00'),
    (19, 1, 2, 'Bonne chance pour le tournoi !', 1, '2025-10-14 08:00:00', '2025-10-14 07:50:00'),
    (20, 2, 1, 'Merci, à toi aussi !', 0, NULL, '2025-10-14 09:37:00');

INSERT INTO messagerie_privee(msg_id, user_sender_id, user_receiver_id, msg, is_read, read_at, created_at) 
VALUES(21, 5, 4, 'mec on lance une game?', 1, '2025-10-14 09:15:00', '2025-10-14 09:00:00'),
    (22, 4, 5, 'cest parti lance', 1, '2025-10-14 09:17:00', '2025-10-14 09:05:00'),

UPDATE messagerie_privee
SET msg="XD ON LANCE"
WHERE msg_id=21 ;

---MSG PRIVEE------
