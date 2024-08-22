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