<?php
include("../inc/init.inc.php");
include("../inc/haut.inc.php");
////////////////// Ajouter un membre //////////
if (!empty($_POST)) {
    debug($_POST);
    //htmlentities est une fonction qui convertie tous les caractères en entités html
    // exemple: si une personne au lieu de mettre son nom dans le champs nom, il met <strong>martin</strong>, du coup le texte se transformera à l'affichage en gras , ce qui peut ne pas être souhaitable maintant avec htmlentities l'affichage sera tout simplement <strong>martin</strong> mais pas en gras
    $pseudo = htmlentities(addslashes($_POST['pseudo']));
    $mdp = md5(addslashes($_POST['mdp']));
    $prenom = htmlentities(addslashes($_POST['prenom']));
    $nom = htmlentities(addslashes($_POST['nom']));
    $email = htmlentities(addslashes($_POST['email']));
    $civilite = htmlentities(addslashes($_POST['civilite']));
    $ville = htmlentities(addslashes($_POST['ville']));
    $cp = htmlentities(addslashes($_POST['cp']));
    $adresse = htmlentities(addslashes($_POST['adresse']));
    $statut = htmlentities(addslashes($_POST['statut']));

    // il faut supprimer toutes les données de la table membre puis rajouter de nouveau membre pour que le criptage fonctionne
    $resultat = $pdo->exec("INSERT INTO membre(pseudo,mdp,nom,prenom,email,civilite,ville,code_postal,adresse,statut)VALUES('$pseudo','$mdp','$nom','$prenom','$email','$civilite','$ville','$cp','$adresse','$statut')");
    if ($resultat == 1) {
        echo "membre ajouté avec succès";
    }
}

?>

<form action='' method='post'>
    <label></label>
    <input type='text' name='pseudo' placeholder='votre pseudo' /><br><br>
    <label></label>
    <input type='text' name='mdp' placeholder='votre mot de passe' /><br><br>
    <label></label>
    <input type='text' name='nom' placeholder='votre nom' /><br><br>
    <label></label>
    <input type='text' name='prenom' placeholder='votre prenom' /><br><br>
    <label></label>
    <input type='text' name='email' placeholder='votre email' /><br><br>
    <label></label>
    <select name='civilite'>
        <option>m</option>
        <option>f</option>
        <option>mixte</option>
    </select><br><br>
    <label></label>
    <input type='text' name='ville' placeholder='votre ville' /><br><br>
    <label></label>
    <input type='nimber' name='cp' placeholder='votre cp' /><br><br>
    <label></label>
    <input type='text' name='adresse' placeholder='votre adresse' /><br><br>
    <label></label>
    <input type='nimber' name='statut' placeholder='statut' /><br><br>
    <input type='submit' value='Ajouter un membre' /><br><br>
</form>