<?php
include("inc/init.inc.php");
include("inc/haut.inc.php");
// ici on verifie si le pseudo ou l'email envoyé en post par le formulaire, est ce cette information existe déja ?
// - si oui je verifie est ce le mot de passe envoyé en post aussi correspond au mot de passe de la même personne dans la table membre
// si tout est ok, on affiche juste "ça matche"

// nb: on utlise rowCount() pour tester si cette personne existe belle et bien

if(!empty($_POST)){
    $identifiant = $_POST['identifiant'];
    $mdp = $_POST['mdp'];
    $membre = $pdo->query("SELECT * from membre WHERE pseudo = '$identifiant' or email = '$identifiant' ");

    if($membre->rowCount() >=1){
        echo "membre déja inscrit";
    }
}
?>

<form action="" method="post">
    <table>
        <tr><td><label for="identifiant">identifiant</label></td><td><input type="text" name="identifiant" /></td><tr>
        <tr><td><label for="mdp">mot de passe</label></td><td><input type="text" name="mdp" /></td><tr>
        <tr><td></td><td><input type="submit" /></td><tr>
    </table>
</form>

<?php
include("inc/bas.inc.php");
?>