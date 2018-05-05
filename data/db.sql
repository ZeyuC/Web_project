CREATE TABLE "user" (
    id SERIAL PRIMARY KEY ,
    firstname VARCHAR NOT NULL ,
    lastname VARCHAR NOT NULL ,
    birthday date
);

INSERT INTO "user"(firstname, lastname, birthday) VALUES ('John', 'Doe', '1967-11-22');
INSERT INTO "user"(firstname, lastname, birthday) VALUES ('Yvette', 'Angel', '1932-01-24');




CREATE TABLE "users" (
    pseudo VARCHAR(20) PRIMARY KEY,
    mdp    VARCHAR       NOT NULL ,
    birthday date,
	  admin boolean NOT NULL
);
INSERT INTO "users"(pseudo, mdp, admin) VALUES ('Skoli', 'mdpparfait', 'TRUE');
INSERT INTO "users"(pseudo, mdp, admin) VALUES ('Kouri', 'mdpparfait', 'TRUE');
INSERT INTO "users"(pseudo, mdp, admin) VALUES ('16', 'mdpparfait', 'TRUE');
INSERT INTO "users"(pseudo, mdp, admin) VALUES ('Yuze', 'mdpparfait', 'TRUE');
INSERT INTO "users"(pseudo, mdp, admin) VALUES ('visiteur', 'visiteur', 'FALSE');

CREATE TYPE statutdumanga AS ENUM('coming soon','en cours','terminé');

CREATE TABLE "manga" (
       nom    VARCHAR	PRIMARY KEY,
       auteur VARCHAR 	NOT NULL,
       genre  VARCHAR,
       statut statutdumanga NOT NULL,
       note     INT,
       nb_notes INT,
       nb_chap  INT,
       debut DATE,
       fin   DATE
);

INSERT INTO "manga"(nom,auteur,genre,statut) VALUES ('One piece','Oda','action,aventure','en cours') ;
INSERT INTO "manga"(nom,auteur,genre,statut) VALUES ('Two piece','Oda','action,aventure','en cours') ;
INSERT INTO "manga"(nom,auteur,genre,statut) VALUES ('3 piece','Oda','action,aventure','en cours') ;

CREATE TABLE "chapitre" (
       nom VARCHAR,
       num INT,
       nb_pages INT,

       CONSTRAINT fk_chap_manga FOREIGN KEY (nom)
       REFERENCES manga(nom)
);


CREATE TABLE "biblio"(
       pseudo VARCHAR(20) PRIMARY KEY,
       manga   VARCHAR	,
       stat_lect VARCHAR,
       note INT,
       comm VARCHAR,

       CONSTRAINT fk_biblio_users FOREIGN KEY (pseudo)
	REFERENCES users(pseudo)


);
