<?php
include("../inc/init.inc.php");
include("../inc/haut.inc.php");

// on récupère la photo avec $_FILES
echo "<a href='?action=ajouter'> Ajouter un produit </a><br><br>";
echo "<a href='?action=afficher'> Afficher des produits </a><br><br>";
if (!empty($_POST)) {
    if (!empty($_FILES['photo'])) {

        // debug($_FILES);
        // time() est appelé timestamp càd le nombre de secondes écoulé depuis le 1er janvier 1970
        // ce nombre change chaque seconds
        $unique = time();
        $reference = 'ifocop_'.time();
        // debug($unique);
        // ici on utilise la fonction time() pour avoir un nombre unique, ainsi on évitera d'avoir deux photos de même nom
        $nom_photo = $unique . '_' . $_FILES['photo']['name'];
        // $db represente le chemin de la photo à partir du localhost (www ou htdocs)
        $db = RACINE_SITE . 'photo/' . $nom_photo;
        // echo $db;
        // debug($_SERVER['DOCUMENT_ROOT']);
        // $db represente le chemin de la photo à partir du localhost (www ou htdocs)

        // $chemin represente le chemin de la photo à partir de la racine du document
        $chemin = $_SERVER['DOCUMENT_ROOT'] . $db;
        // echo $chemin;
        // ici on copie la photo à l'interieur du repertoire photo
        // le tmp_name represente la photo
        copy($_FILES['photo']['tmp_name'], $chemin);
    }
// debug($_POST);
$reference = $reference;
$categorie = $_POST['categorie'];
$titre = $_POST['titre'];
$description = $_POST['description'];
$couleur = $_POST['couleur'];
$taille = $_POST['taille'];
$public = $_POST['public'];
$photo = $db; // /ifocop_2024/site/photo/nom_photo
$prix = $_POST['prix'];
$stock = $_POST['stock'];

   $resultat = $pdo->exec("INSERT INTO produit(reference,categorie,titre,description,couleur,taille,public,photo,prix,stock) VALUES('$reference','$categorie','$titre','$description','$couleur','$taille','$public','$photo','$prix','$stock')");
   if($resultat){
    echo "<span style='background-color:green;color:white'>produit ajouté avec succès<span>";
   }

}
?>
<!-- ne pas oublier  de mettre enctype="multipart/form-data" dans form et de mettre le type en file -->
 <?php
 // si tu voie action=ajouter sur l'url
 if(isset($_GET['action']) and $_GET['action'] == "ajouter" ){
?>
<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr><td><input type="hidden" name="reference" /></td></tr>
        <tr><td><label for="categorie">categorie</label></td><td><input type="text" name="categorie" /><br></td></tr>
        <tr><td><label for="titre">titre</label></td><td><input type="text" name="titre" /></td></tr>
        <tr><td><label for="description">description</label></td><td><textarea name="description" placeholder="description du produit"></textarea></td></tr>
        <tr><td><label for="couleur">couleur</label></td><td><input type="text" name="couleur" /></td></tr>
        <tr><td><label for="taille">taille</label></td><td> <select name="taille">
        <option value="x">X</option>
        <option value="xl">XL</option>
        <option value="m">M</option>
        <option value="s">S</option>
    </select></td></tr>
        <tr><td><label for="public">public</label></td><td> <select name="public">
        <option value="m">Masculin</option>
        <option value="f">Feminin</option>
        <option value="mixte">Mixte</option>
    </select></td></tr>
        <tr><td></td><td> <select name="public">
        <option value="m">Masculin</option>
        <option value="f">Feminin</option>
        <option value="mixte">Mixte</option>
    </select></td></tr>
        <tr><td><label for="photo">photo</label></td><td> <input type="file" name="photo" /></td></tr>
        <tr><td> <label for="prix">prix</label></td><td><input type="number" name="prix" /></td></tr>
        <tr><td><label for="stock">stock</label></td><td><input type="number" name="stock" /></td></tr>
        <tr><td></td><td><input type="submit" /></td></tr>
    </table>

</form>

<?php
 }
 if(isset($_GET['action']) and $_GET['action'] == "afficher"){
   $produits = $pdo->query("SELECT * FROM produit");
echo "<table>";
echo "<tr><th>reference</th><th>categorie</th><th>titre</th><th>photo</th><th>prix</th></tr>";
while($donnees = $produits->fetch(PDO::FETCH_ASSOC)){
    // debug($donnees);
   echo "<tr><td>$donnees[reference]</td><td>$donnees[categorie]</td><td>$donnees[titre]</td><td><img src='$donnees[photo]' alt='' width='70' /></td><td>$donnees[prix]</td></tr>";
}
echo "</table>";
}

include("../inc/bas.inc.php");
?>