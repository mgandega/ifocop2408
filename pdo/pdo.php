<?php
// pdo (php data object), c'est un objet qui nous permet d'utiliser sql pour executer des requêtes (interagir  avec la base de données)

$pdo = new PDO('mysql:host=localhost;dbname=ifocop', 'root', 'root');

print_r($pdo);

// ajouter un employé
// pour l'ajout, la modification, la suppression, on utilise toujours exec ($pdo->exec())
//on utilise query ($pdo->query()) seulement pour la selection
//  $resultat = $pdo->exec("INSERT INTO employes(prenom,nom,sexe,service,date_embauche,salaire) VALUES('emmanuel','macron','m','president','2016-03-31',8000)");

//  // si l'insertion se passe bien avec succès, la requête me retourne la valeur 1, du coup on aura dans $resultat la valeur 1
//  if($resultat == 1){
//     echo "<span style='background-color:green; color:white'>employé ajouté avec succès</span>";
//  }else{
//     echo "<span style='background-color:red; color:white'>échec sur l'insertion</span>";
//  }

// modifier un employe

//  $resultat = $pdo->exec("UPDATE employes SET salaire=12000 where id_employes=992 ");

//  // si l'insertion se passe bien avec succès, la requête me retourne la valeur 1, du coup on aura dans 
// $resultat la valeur 1
//  if($resultat == 1){
//     echo "<br><br><span style='background-color:green; color:white'>employé modifié avec succès</span>";
//  }else{
//     echo "<br><br><span style='background-color:red; color:white'>échec sur l'insertion</span>";
//  }

// supprimer un employé

// $resultat =  $pdo->exec("DELETE FROM employes where id_employes=992");

//   if($resultat == 1){
//     echo "<br><br><span style='background-color:red; color:white'>employé supprimé avec succès</span>";
//  }else{
//     echo "<br><br><span style='background-color:red; color:white'>échec sur l'insertion</span>";
//  }

// récupérer (selectionner) des employes 

$resultat = $pdo->query("SELECT * FROM employes");

print_r($resultat);
// // ici $resultat n'est pas exploitable
// echo "les employes de l'entreprises sont : <br>";
// // fetch permet de lire la table employé et pour chaque ligne elle récupère les clés et les valeurs 
// // PDO::FETCH_ASSOC permet de convertir les données récuperées avec fetch en tableau associatif
// // tant qu'il y'a des lignes, récupéres les moi et mets les moi dans $données
// while ($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
//     echo $donnees['prenom'].' '.$donnees['nom'].'<br>';
//     // echo "<pre>";
//     // print_r($donnees);
//     // echo "</pre>";
// }

// $donnees = $resultat->fetch(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($donnees);
// echo "</pre>";

// si on a cliqué sur le bouton de submit 
if (!empty($_POST)) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $genre = $_POST['genre'];
    $service = $_POST['service'];
    $date_embauche = $_POST['date_embauche'];
    $salaire = $_POST['salaire'];
    $resultat =  $pdo->exec("INSERT INTO employes(prenom,nom,sexe,service,date_embauche,salaire) 
   VALUES('$prenom','$nom','$genre','$service','$date_embauche','$salaire' )");

    if ($resultat == 1) {
        echo "<span style='background-color:green; color:white'>employé ajouté avec succès</span>";
    }
}

?>
<form action="#" method="post">
    <input type="text" name="prenom" placeholder="votre prenom" /><br><br>
    <input type="text" name="nom" placeholder="votre nom" /><br><br>
    <select name="genre">
        <option value="m">m</option>
        <option value="f">f</option>
    </select><br><br>
    <input type="text" name="service" placeholder="votre service" /><br><br>
    <input type="date" name="date_embauche" placeholder="votre date_embauche" /><br><br>
    <input type="number" name="salaire" placeholder="votre salaire" /><br><br>
    <input type="submit" /><br><br>
</form>