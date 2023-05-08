--USER
create user aiproject with password 'aiproject';
ALTER USER aiproject SUPERUSER;

--CREATE DATABASE
create database aiproject;

--Extension pour le cryptage
CREATE EXTENSION pgcrypto;

CREATE TABLE Administrator (
  idAdministrator SERIAL PRIMARY KEY NOT NULL, 
  email     varchar(50) NOT NULL, 
  nom  varchar(50) NOT NULL, 
  prenom  varchar(50) NOT NULL, 
  motdepasse   text
);

INSERT INTO Administrator values (default,'miora.ratsiresy@gmail.com','Ratsiresy','Miora Fanantenana',crypt('miora', gen_salt('bf')));


CREATE TABLE Categorie(
  idCategorie SERIAL PRIMARY KEY NOT NULL,
  categorie varchar(80),
  etat int default 0
);

insert into Categorie(categorie) values ('Deep & Reinforcement Learning');
insert into Categorie(categorie) values ('Enterprise');
insert into Categorie(categorie) values ('Ethics & Society');
insert into Categorie(categorie) values ('Industries');
insert into Categorie(categorie) values ('Machine Learning');
insert into Categorie(categorie) values ('Robotics');


CREATE TABLE TypeActualite(
  idTypeActualite SERIAL PRIMARY KEY NOT NULL,
  typeactualite varchar(80)
);

insert into TypeActualite values(default,'Article');
insert into TypeActualite values(default,'Evenement');

CREATE TABLE Actualites(
  idActualite SERIAL PRIMARY KEY NOT NULL,
  idtypeactualite int,
  photoillustration varchar(100),
  grandtitre varchar(80),
  descriptionactualite text,
  datepublication timestamp default  now(),
  datedebut timestamp default NULL,
  datefin timestamp default NULL,
  lieuevenement varchar(80) default NULL,
  etat int default 0 ---0 en cours 4 removed
);
ALTER TABLE Actualites ADD FOREIGN KEY(idtypeactualite) REFERENCES TypeActualite(idtypeactualite);

CREATE TABLE ActualiteCategorie(
  idActualite int,
  idCategorie int
);

ALTER TABLE ActualiteCategorie ADD FOREIGN KEY(idActualite) REFERENCES Actualites(idActualite);
ALTER TABLE ActualiteCategorie ADD FOREIGN KEY(idCategorie) REFERENCES Categorie(idCategorie);




CREATE TABLE Utilisateur(
  idUtilisateur SERIAL PRIMARY KEY,
  nomutilisateur varchar(80),
  prenomutilisateur varchar(80),
  email varchar(80),
  motdepasse text
);

CREATE TABLE CommentaireActualite(
  idCommentaire SERIAL PRIMARY KEY NOT NULL,
  idActualite int,
  utilisateur int,
  commentaires text,
  datecommentaire timestamp
);
