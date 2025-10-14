
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
