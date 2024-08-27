<?php
$pdo = new PDO("mysql:host=localhost;dbname=ifocop","root","root");
// Afficher tous les employes provenant de la table employes dans un tableau puis créer un lien sur chaque ligne pour supprimer un employe bien précis
?>

<?php
$employes = $pdo->query("SELECT * FROM employes");

echo "<table>";
echo  "<tr><th>prenom</th><th>nom</th><th>sexe</th><th>service</th></tr>";
    while($donnees = $employes->fetch(PDO::FETCH_ASSOC)){
       echo  "<tr><td>$donnees[prenom]</td><td>$donnees[nom]</td><td>$donnees[sexe]</td><td>$donnees[service]</td></tr>";
    }
echo "</table>";
?>