create database gestionstagiaire_v1;
use gestionstagiaire_v1;
create table filiere(
    idFiliere varchar(5) primary key,
    intitule varchar(20),
    nombreGroupe int
);
use gestionstagiaire_v1;
create table stagiaire(
    idstagiaire int AUTO_INCREMENT primary key,
    nom varchar(20),
    prenom varchar(20),
    dateNaissance date,
    photoProfil  text,
    idFiliere varchar(5) references filiere(idFiliere)
);
use gestionstagiaire_v1;
create table compteAdministrateur(
    loginAdmin varchar(10) primary key,
    motPasse varchar(10),
    nom varchar(20),
    prenom varchar(20)
);

insert into compteAdministrateur values('admin','123','ALLALI','AHMED');
insert into filiere values('DEV','Développement Digitale',9),('ID','Infrastructure Digitale',7);

