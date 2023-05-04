--USER
create user aiproject with password 'aiproject';
ALTER USER aiproject SUPERUSER;

--CREATE DATABASE
create database aiproject;

--Extension pour le cryptage
CREATE EXTENSION pgcrypto;

CREATE TABLE Administrator (
  idAdministrator SERIAL NOT NULL, 
  pseudologin     varchar(50) NOT NULL, 
  nom  varchar(50) NOT NULL, 
  prenom  varchar(50) NOT NULL, 
  motdepasse   text, 
  PRIMARY KEY (idAdministrator)
);

CREATE TABLE Utilisateur(
  idUtilisateur SERIAL PRIMARY KEY,
  nomutilisateur varchar(80),
  prenomutilisateur varchar(80),
);

CREATE TABLE Categorie(
  idCategorie SERIAL PRIMARY KEY NOT NULL,
  categorie varchar(80)
);


CREATE TABLE TypeActualite(
  idTypeActualite SERIAL PRIMARY KEY NOT NULL,
  typeactualite varchar(80)
);

CREATE TABLE Actualites(
  idActualite SERIAL PRIMARY KEY NOT NULL,
  auteur int,
  photoillustration varchar(100),
  grandtitre varchar(80),
  descriptionactualite text,
  datepublication timestamp
  datedebut timestamp,
  datefin timestamp,
  lieuevenement varchar(80),
  etat int default 0
);

CREATE TABLE CommentaireActualite(
  idCommentaire SERIAL PRIMARY KEY NOT NULL,
  idActualite int,
  utilisateur int,
  commentaires text,
  datecommentaire timestamp
);
