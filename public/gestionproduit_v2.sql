create database gestionproduit_v2;
use gestionproduit_v2;
create table categorie(
    idCategorie varchar(4) primary key,
    denomination varchar(20),
    description text
);
use gestionproduit_v2;
create table produit(
    reference int AUTO_INCREMENT primary key,
    libelle varchar(20),
    prixUnitaire decimal,
    dateAchat date,
    photoProduit text,
    idCategorie varchar(4) references categorie(idCategorie)
);
use gestionproduit_v2;
create table compteProprietaire(
    loginProp varchar(10) primary key,
    motPasse varchar(10),
    nom varchar(20),
    prenom varchar(20)
);

insert into compteProprietaire values('prop','123','KADIRI','ALI');
insert into categorie values('cat1','ordinateur portable',"Chez InfoShop Des ordinateurs 9 pouces à 17 pouces, tous les utilisateurs d'ordinateurs portables seront ravis par les différents modèles Windows, Linux ou Macintosh, proposés par InfoShop"),('cat2','ordinateur bureau',"Il y en a pour tous les goûts, les gamers y trouveront leur bonheur avec les Desktop Gamer, les familles seront ravies d'utiliser des ordinateurs de bureau All in One et les professionnels du graphisme, de l'architecture, du montage vidéo seront satisfaits de leur iMac"),('cat3','Accessoires',"");

