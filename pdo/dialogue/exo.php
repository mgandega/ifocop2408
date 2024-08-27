<?php
$pdo = new PDO("mysql:host=localhost;dbname=ifocop","root","root");
// Afficher tous les employes provenant de la table employes dans un tableau puis créer un lien sur chaque ligne pour supprimer un employe bien précis
?>

<?php
if(isset($_GET['action']) == 'supprimer'){
   $resultat = $pdo->exec("DELETE FROM employes WHERE id_employes = '$_GET[idEmploye]' ");
   if($resultat == 1){
    echo "un employé supprimé avec succès";
   }
}
$employes = $pdo->query("SELECT * FROM employes");

echo "<table>";
echo  "<tr><th>prenom</th><th>nom</th><th>sexe</th><th>service</th></tr>";
    while($donnees = $employes->fetch(PDO::FETCH_ASSOC)){
       echo  "<tr><td>$donnees[prenom]</td><td>$donnees[nom]</td><td>$donnees[sexe]</td><td>$donnees[service]</td><td><a href='?action=supprimer&idEmploye=$donnees[id_employes]'>supprimer</a></td></tr>";
    }
echo "</table>";
?>
