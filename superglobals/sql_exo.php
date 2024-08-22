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