#inicialisation de la base de donne.
#source C:/wamp/www/projet groupe 8/sql/base_de_donnes.sql;

drop database trade;
create database trade;
use trade;

CREATE TABLE if not exists vendeur  ( id_vendeur int auto_increment,
	                    nom_vendeur char(30),
	                    prenom_vendeur char(20),
	                    adresse_vendeur char(20),
	                     PRIMARY KEY (id_vendeur));
CREATE TABLE if not exists client( id_client int auto_increment, 
                     nom_client char(20) , 
                     premons_client char(20), 
                     adresse_client char(30),
                     email_client char(30),
                     login_client char(30),
                     password_client char(30), 
                     PRIMARY KEY (id_client));
CREATE TABLE if not exists recevoir (id_recevoir int auto_increment,
                       FOREIGN KEY (id_recevoir) references vendeur(id_vendeur),
                       FOREIGN KEY (id_recevoir) references client(id_client) );

CREATE TABLE if not exists reglement (id_reglement int auto_increment, 
                         date_reglement date, 
                         montant_reglement int(20),
	                     PRIMARY KEY (id_reglement),
                         FOREIGN KEY (id_reglement) references client(id_client),
                         FOREIGN KEY (id_reglement) references commande(id_commande));
CREATE TABLE if not exists commande (id_commande int auto_increment,
	                    date_commande date,
	                    PRIMARY KEY (id_commande));
CREATE TABLE if not exists concerner (id_concerner int auto_increment,
                       FOREIGN KEY (id_concerner) references commande(id_commande),
                       FOREIGN KEY (id_concerner) references article(id_article) );
CREATE TABLE if not exists article (id_article int auto_increment, 
                           ref_article char(20), 
                           libelle_article char(20) , 
                           seul_stock_article int(10), 
                           prix_min_article int(10), 
                           prix_max_article int(10),
                           PRIMARY KEY (id_article));

