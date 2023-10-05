create database etudiants;
use etudiants;

create table etudiant(
	id int auto_increment primary key,
    Nom varchar(60) not null,
    Prenom varchar(60) not null,
    Date_de_naissance date not null,
    Sexe varchar(10) not null,
    Classe varchar(10) not null,
    email varchar(40) not null,
	telephone varchar(15) not null,
    telephonePere varchar(15) not null,
    telephoneMere varchar(15) not null,
    CIN varchar(15)  not null,
    Massar varchar(30) not null,
);