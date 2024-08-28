<?php
include("inc/init.inc.php");
include("inc/haut.inc.php");
$pdo = new PDO("mysql:host=localhost;dbname=ecom_ifocop", "root", "root");
if(!empty($_POST)){
       $pseudo =  $_POST['pseudo'];
       $mdp =  $_POST['mdp'];
       $nom =  $_POST['nom'];
       $prenom =  $_POST['prenom'];
       $email =  $_POST['email'];
       $civilite =  $_POST['civilite'];
       $ville =  $_POST['ville'];
       $cp =  $_POST['cp'];
       $adresse =  $_POST['adresse'];
       $statut =  $_POST['statut'];

       $membre = $pdo->query("SELECT * FROM membre where pseudo = '$pseudo' OR email='$email' ");
       // rowCount permet de compter le nombre de lignes (entrées) qui existe adns une table

       if($membre->rowCount() >=1){
            echo "<span>ce membre existe déja </span> <br>";
        }else{
            $resultat =  $pdo->exec("INSERT INTO membre(pseudo,mdp,nom,prenom,email,civilite,ville,code_postal,adresse,statut) VALUE('$pseudo','$mdp','$nom','$prenom','$email','$civilite','$ville','$cp','$adresse','$statut')");
            if($resultat == 1){
             echo "<span style='background-color:green; color:white'>inscription réussie </span><br>";
            }
            // header() permet de rediriger l'utilisateur sur une autre page
            header("location:connexion.php");
        }
       

}
    echo "INSCRIPTION";
?>
<form action="" method="post">
<table>
    <tr><td><label for="pseudo">pseudo</label></td><td><input type="text" name="pseudo" /></td></tr>
    <tr><td><label for="mdp">mot de passe</label></td><td><input type="text" name="mdp" /></td></tr>
    <tr><td><label for="nom">nom</label></td><td><input type="text" name="nom" /></td></tr>
    <tr><td><label for="prenom">prenom</label></td><td><input type="text" name="prenom" /></td></tr>
    <tr><td><label for="email">email</label></td><td><input type="text" name="email" /></td></tr>
    <tr><td><label for="civilite">civilite</label></td><td><select name="civilite">
        <option value="f">femme</option>
        <option value="m">homme</option>
    </select></td></tr>
    <tr><td><label for="ville">ville</label></td><td><input type="text" name="ville" /></td></tr>
    <tr><td><label for="cp">cp</label></td><td>
        <input type="number" name="cp" /></td></tr>
    <tr><td><label for="adresse">adresse</label></td><td><input type="text" name="adresse" /></td></tr>
    <tr><td><label for="statut">statut</label></td><td><input type="number" name="statut" /></td></tr>
    <tr><td></td><td><input type="submit" /></td></tr>
</table>

</form>

<?php
include("inc/bas.inc.php");
?>