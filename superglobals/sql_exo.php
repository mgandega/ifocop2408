<?php
// Afficher la profession de l'employé 547
// select * from employes where id_employes=547

//  Afficher la date d'embauche de : Amandine.
// select prenom, date_embauche from employes where prenom ='Amandine'

// Afficher le nombre de commerciaux.
// select count(*) from employes where service='commercial' 

// Afficher le coût des commerciaux sur 1 année.
// select salaire * 12 AS 'salaire annuel' from employes where service='commercial'

// Afficher le salaire moyen par service.
// select service, ROUND(AVG(salaire)) from employes GROUP BY service

// Afficher le nombre de recrutements sur l'année 2010.
// select * from employes where date_embauche like '2010%'
// select * from employes where date_embauche >='2010' and date_embauche <='2010'
// select * from employes where date_embauche BETWEEN '2010-01-01' and '2010-12-31'

// Augmenter le salaire pour chaque employé de 100€.
// UPDATE employes SET salaire = salaire + 100

// Afficher le nombre de services (différents).
// select service, count(service) FROM employes GROUP BY service;

// Afficher les informations de l'employé du service commercial gagnant le salaire le plus élevé
// select * from employes where service = 'commercial' ORDER BY salaire DESC limit 1

// Afficher l'employé ayant été embauché en dernier.

// select * from employes ORDER BY id_employes DESC LIMIT 1

// JOINTURES 
// select : selectionnes moi
// nom de champ : dans le champ champ1, champ2
// FROM : provenant de la table table1 , table2, table_jointure
// where : où
// id_champ1 qui se trouve dans la table_jointure
// = 
// id_champ1 qui se trouve dans la table table1

// select abonne.prenom, livre.auteur 
// from abonne, livre, emprunt 
// where emprunt.id_abonne = abonne.id_abonne
// and emprunt.id_livre = emprunt.id_livre
// AND abonne.prenom='chloe';

// select abonne.prenom, livre.auteur 

//  qui a emprunté le livre 'Une Vie' sur l'année 2014 ?
// select prenom, titre 
// from abonne, livre, emprunt 
// where emprunt.id_abonne = abonne.id_abonne
// AND emprunt.id_livre = livre.id_livre
// AND  livre.titre = 'Une vie'
// AND date_sortie LIKE '2014%'

// Afficher le nombre de livres empruntés par chaque abonné
// select prenom , count(emprunt.id_livre) 
// from abonne, livre, emprunt 
// where emprunt.id_abonne = abonne.id_abonne 
// group by abonne.prenom

// Qui a emprunté Quoi ? et Quand ?
// select abonne.prenom, livre.auteur, emprunt.date_sortie
// from abonne, livre, emprunt 
// where emprunt.id_abonne = abonne.id_abonne
// and emprunt.id_livre = livre.id_livre;

// 4 Afficher le prénom des abonnés avec le numéro des livres qu'ils ont emprunté
// select abonne.prenom, livre.id_livre
// from abonne, livre, emprunt 
// where emprunt.id_abonne = abonne.id_abonne
// and emprunt.id_livre = livre.id_livre;

// 5 Afficher les abonnés qui n'ont pas rendu leurs livres
// select abonne.prenom
// from abonne, livre, emprunt 
// where emprunt.id_abonne = abonne.id_abonne
// and emprunt.id_livre = livre.id_livre
// and emprunt.date_rendu IS null

// jointure avec left join
// le left join permet d'afficher toutes les informations de la table de gauche même s'il y'a pas de correspondance sur la table de droite
// le right join permet d'afficher toutes les informations de la table de droite même s'il y'a pas de correspondance sur la table de gauche
// le inner join permet d'afficher toutes les informations de la table de gauche qui ont une correspondance sur la table de droite
// select abonne.prenom
// select distinct(abonne.prenom)
// from abonne inner join emprunt
// on emprunt.id_abonne = abonne.id_abonne;

// 1 - Afficher le nom des agences
// select nom from agence;

// 2 - Afficher le numero de l'agence orpi
// SELECT idAgence 
// from agence 
// where nom = 'orpi'

// 3 - Afficher le premier enregistrement de la table logement
// select * from logement limit 1
// select * from logement order by idLogement ASC limit 1


// 4 - Afficher le nombre de logement (en mettant en place un alias : nombre logement)
// select count(*) as 'nombre logement' from logement

// 5 - Afficher les logements à vendre à moins de 150000 € dans l'ordre croissant des prix
// // SELECT * 
// FROM logement 
// where prix < 150000 
// and categorie = 'vente' 
// order by prix;

// 6 - Afficher le nombre de logements à la location (en mettant un alias nombre)
// SELECT count(*) AS 'logement en location'
// FROM logement 
// where categorie='location';

// 7 - Afficher les villes différentes recherchées par les personnes demandeuses de logement
// SELECT distinct(ville)  FROM demande;

// 8-  Quels sont les id des logements entre 20 et 30 m2
// SELECT idLogement FROM logement where superficie BETWEEN 20 AND 30;

// 9 - quel est le prix du logement le moins cher à vendre (en mettant comme alias prix minimum)
// SELECT MIN(prix) FROM logement where categorie='vente';
// SELECT prix FROM logement where categorie='vente' order by prix ASC LIMIT 3;

// 10 - l'agence orpi souhaite diminuer les frais qu'elle applique sur le logement ayant comme id 5246 . Passer les frais de ce logement de 800 à 730 €
// ici vous faites un update sur logement_agence et une jointure entre agence et logement
// UPDATE logement_agence SET frais=730 where idLogement=5246 and idAgence = (select idAgence FROM agence WHERE nom='orpi')

// 11 - Afficher le nombre de propriétaire dans la ville de paris (en mettant un alias: nombre)
// SELECT COUNT(DISTINCT(lp.idPersonne)) AS 'nombre'  
// from logement_personne lp , logement l 
// where lp.idLogement = l.idLogement
// and l.ville = 'paris';