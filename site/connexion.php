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
        
        // ici, on n'a pas besoin d'utiliser un while car on veut juste recuperer une seule ligne
        $donnees = $membre->fetch(PDO::FETCH_ASSOC);
        // on verifie est ce que le mot de passe de ce membre est egal au mot de passe envoyé par le formulaire
        if($donnees['mdp'] == $_POST['mdp']){
            $_SESSION['membre']['pseudo'] = $donnees['pseudo'];
            $_SESSION['membre']['prenom'] = $donnees['prenom'];
            $_SESSION['membre']['nom'] = $donnees['nom'];
            $_SESSION['membre']['civilite'] = $donnees['civilite'];
            $_SESSION['membre']['email'] = $donnees['email'];
            $_SESSION['membre']['ville'] = $donnees['ville'];
            $_SESSION['membre']['cp'] = $donnees['code_postal'];
            $_SESSION['membre']['adresse'] = $donnees['adresse'];
            // echo "<pre>";
            // print_r($_SESSION);
            // echo "</pre>";
            header("location:profil.php");
        }
    }else{
        echo "il faut vous inscrire";
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