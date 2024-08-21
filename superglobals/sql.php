<?php
//sql est un langage de requête qui nous permet d'utliser le C (create) R (read) U (update) D (delete)

// REQUÊTES DE SELECTION 
// - SELECT
 
// REQUÊTES SCALAIRE
// selectionnes moi toutes les données des champs provenant de la table employes
// SELECT * FROM employes

// selectionnes moi toutes les donnes des champs prenom et nom provenant de la table employes
// SELECT prenom, nom FROM employes

// - DISTINCT
// selectionnes moi toutes services sans doublon
// select DISTINCT(service) FROM employes


// selctionnes moi toutes les données provenant de la table employes et dont le service est informatique
// select prenom, nom from employes where service = 'informatique'

// BETWEEN
// selectionnes moi toutes les données provenant de la table employes et dont le service est commercial et dont la date_embauche est entre '2004-01-01' and '2006-12-12'
// select * from employes where service='commercial' and date_embauche BETWEEN '2004-01-01' and '2006-12-12'

// CURDATE()
// selectionnes moi toutes les données provenant de la table employes et dont le service est commercial et dont la date_embauche est entre '2004-01-01' et la date actuelle 
// select * from employes where service='commercial' and date_embauche BETWEEN '2004-01-01' and CURDATE()

// LIKE
// selectionnes moi toutes les données provenant de la table employes et dont le prenom contient la lettre 'e'
// select * from employes where prenom LIKE '%e%'


// GROUP BY
// selectionnes moi toutes les données provenant de la table employes et regroupes les moi par service
// la clause GROUP BY s'utilise avec une requête d'aggregat
// SELECT service, count(service) FROM employes GROUP BY service


// !=
// selectionnes moi toutes les données provenant de la table employes et dont le service est différent de informatique
// select * from employes where service != 'informatique'


// IN
// la clause IN à la valeur de égal (=) mais la différence est qu'elle peut prendre plusieurs arguments
// selectionnes moi toutes les données provenant de la table employes et dont le service est informatique et commercial
// select * from employes where service IN("informatique","commercial")

// NOT IN
// selectionnes moi toutes les données provenant de la table employes et dont le service n'est pas informatique et commercial
// select * from employes where service NOT IN("informatique","commercial")

// ORDER BY
// selectionnes moi tous les prénoms provenant de la table employes par ordre ascendant de prenom
// select prenom from employes ORDER BY prenom ASC
// selectionnes moi tous les prénoms provenant de la table employes par ordre descendant de prenom
// select prenom from employes ORDER BY prenom DESC

// LIMIT
// selectionnes moi tous les champs provenant de la table employes par ordre descendant et tu m'en recuperes les 3 premiers 
// select * from employes ORDER BY id_employes DESC LIMIT 3



// REQUÊTES D'AGREGAT
// COUNT
// selctionnes moi le nombre d'employes
// select count(*) from employes

// AVG
// selctionnes moi le salaire moyen des employes
// select AVG(salaire) from employes

// MIN / maximumMAX
// selectionnes moi le salaire minimum des employes
// select MIN(salaire) from employes


// INSERTION
// inserres moi dans la table employes ces informations : 'emmanuel','macron','m','president','2016-12-12',5400)
// INSERT INTO employes(prenom,nom,sexe,service,date_embauche,salaire) VALUES('emmanuel','macron','m','president','2016-12-12',5400)












