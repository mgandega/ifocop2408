<?php
include("../inc/init.inc.php");
include("../inc/haut.inc.php");

// on récupère la photo avec $_FILES
echo "<a href=''> Ajouter un produit </a><br><br>";
echo "<a href=''> Afficher un produit </a><br><br>";
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
<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="reference" /><br><br>

    <label for="categorie">categorie</label>
    <input type="text" name="categorie" /><br><br>

    <label for="titre">titre</label>
    <input type="text" name="titre" /><br><br>

    <label for="description">description</label><br>
    <textarea name="description" placeholder="description du produit"></textarea><br><br>

    <label for="couleur">couleur</label>
    <input type="text" name="couleur" /><br><br>

    <label for="taille">taille</label>
    <select name="taille">
        <option value="x">X</option>
        <option value="xl">XL</option>
        <option value="m">M</option>
        <option value="s">S</option>
    </select><br><br>

    <label for="public">public</label>
    <select name="public">
        <option value="m">Masculin</option>
        <option value="f">Feminin</option>
        <option value="mixte">Mixte</option>
    </select><br><br>

    <label for="photo">photo</label>
    <input type="file" name="photo" /><br><br>

    <label for="prix">prix</label>
    <input type="number" name="prix" /><br><br>

    <label for="stock">stock</label>
    <input type="number" name="stock" /><br><br>

    <input type="submit" /><br><br>
</form>
<?php
include("../inc/bas.inc.php");
?>