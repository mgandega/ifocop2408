<?php
include("../inc/init.inc.php");
include("../inc/haut.inc.php");

// on récupère la photo avec $_FILES
echo "<a href='?action=ajouter'> Ajouter un produit </a><br><br>";
echo "<a href='?action=afficher'> Afficher des produits </a><br><br>";
if (!empty($_POST)) {
    debug($_FILES);
    $reference = 'ifocop_' . time();
    if (!empty($_FILES['photo']['name'])) {

        // debug($_FILES);
        // time() est appelé timestamp càd le nombre de secondes écoulé depuis le 1er janvier 1970
        // ce nombre change chaque seconds
        $unique = time();
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
     // /ifocop_2024/site/photo/nom_photo
    $prix = $_POST['prix'];
    $stock = $_POST['stock'];



    // MODIFICATION DE PRODUIT
    if (isset($_GET['action']) and $_GET['action'] == 'modifier' and isset($_GET['idProduit'])) {
        debug($_POST);
        // si $_FILES['photo']['name'] est vide, cela veut dire qu'il y'a pas de photo .
        // ici on dit :si $_FILES['photo']['name'] est vide ne rajoute pas de photo ($db)
        if(empty($_FILES['photo']['name'])){
            $resultat =   $pdo->exec("UPDATE produit set categorie='$_POST[categorie]',titre= '$_POST[titre]', description = '$_POST[description]', couleur='$_POST[couleur]', taille='$_POST[taille]',public='$_POST[public]',prix='$_POST[prix]',stock='$_POST[stock]'  WHERE id_produit='$_GET[idProduit]' ");
        }else{
            // sinon rajoute la photo ($db)
            $resultat =   $pdo->exec("UPDATE produit set categorie='$_POST[categorie]', description = '$_POST[description]', couleur='$_POST[couleur]', taille='$_POST[taille]',public='$_POST[public]',prix='$_POST[prix]',photo='$db', stock='$_POST[stock]'  WHERE id_produit='$_GET[idProduit]' ");
        }
        if ($resultat == 1) {
            echo "<span style='background-color:green;color:white'>produit modifié avec succès<span>";
        }
        } elseif (isset($_GET['action']) and $_GET['action'] == "ajouter") {
            // AJOUT DE PRODUIT
            $resultat = $pdo->exec("INSERT INTO produit(reference,categorie,titre,description,couleur,taille,public,photo,prix,stock) VALUES('$reference','$categorie','$titre','$description','$couleur','$taille','$public','$photo','$prix','$stock')");
            if ($resultat) {
                echo "<span style='background-color:green;color:white'>produit ajouté avec succès<span>";
            }
        }
    }
?>
<!-- ne pas oublier  de mettre enctype="multipart/form-data" dans form et de mettre le type en file -->
<?php
// si tu voie action=ajouter sur l'url
if (isset($_GET['action']) and $_GET['action'] == "ajouter" || $_GET['action'] == 'modifier') {
    if (isset($_GET['idProduit'])) {
        $produit = $pdo->query("SELECT * FROM produit WHERE id_produit = '$_GET[idProduit]' ");
        // ici on ne boucle pas avec while car on recupere juste une ligne (de la base de données) donc le produit à modifier
        $donnees = $produit->fetch(PDO::FETCH_ASSOC);
    }
?>
    <form action="" method="post" enctype="multipart/form-data">
        <table class="table">
            <tr>
                <td><input type="hidden" name="reference" /></td>
            </tr>
            <tr>
                <td><label for="categorie">categorie</label></td>
                <td><input type="text" name="categorie" value="<?php if (isset($donnees['categorie'])) {
                                                                    echo $donnees['categorie'];
                                                                } ?>" /><br></td>
            </tr>
            <tr>
                <td><label for="titre">titre</label></td>
                <td><input type="text" name="titre" value="<?php if (isset($donnees['titre'])) {
                                                                echo $donnees['titre'];
                                                            } ?>" /></td>
            </tr>
            <tr>
                <td><label for="description">description</label></td>
                <td><textarea name="description" placeholder="description du produit"><?php if (isset($donnees['description'])) {
                                                                                            echo $donnees['description'];
                                                                                        } ?></textarea></td>
            </tr>
            <tr>
                <td><label for="couleur">couleur</label></td>
                <td><input type="text" name="couleur" value="<?php if (isset($donnees['couleur'])) {
                                                                    echo $donnees['couleur'];
                                                                } ?>" /></td>
            </tr>
            <tr>
                <td><label for="taille">taille</label></td>
                <td> <select name="taille">
                        <option value="X" <?php if (isset($donnees['taille']) and $donnees['taille'] == 'X') {
                                                echo 'selected';
                                            } ?>>X</option>
                        <option value="XL" <?php if (isset($donnees['taille']) and $donnees['taille'] == 'XL') {
                                                echo 'selected';
                                            } ?>>XL</option>
                        <option value="M" <?php if (isset($donnees['taille']) and $donnees['taille'] == 'M') {
                                                echo 'selected';
                                            } ?>>M</option>
                        <option value="L" <?php if (isset($donnees['taille']) and $donnees['taille'] == 'L') {
                                                echo 'selected';
                                            } ?>>L</option>
                        <option value="S" <?php if (isset($donnees['taille']) and $donnees['taille'] == 'S') {
                                                echo 'selected';
                                            } ?>>S</option>
                    </select></td>
            </tr>
            <tr>
                <td><label for="public">public</label></td>
                <td> <select name="public">
                        <option value="m" <?php if (isset($donnees['public']) and $donnees['public'] == 'm') {
                                                echo 'selected';
                                            } ?>>Masculin</option>
                        <option value="f" <?php if (isset($donnees['public']) and $donnees['public'] == 'f') {
                                                echo 'selected';
                                            } ?>>Feminin</option>
                        <option value="mixte" <?php if (isset($donnees['public']) and $donnees['public'] == 'mixte') {
                                                    echo 'selected';
                                                } ?>>Mixte</option>
                    </select></td>
            </tr>
            <tr>
                <td><label for="photo">photo</label></td>
                <td> <input type="file" name="photo" /></td>
                <td><img src="<?php if (isset($donnees['photo'])) {
                                    echo $donnees['photo'];
                                } ?>" width="70" /></td>
            </tr>
            <tr>
                <td> <label for="prix">prix</label></td>
                <td><input type="number" name="prix" value="<?php if (isset($donnees['prix'])) {
                                                                echo $donnees['prix'];
                                                            } ?>" /></td>
                <!-- <td><input type="number" name="prix" value="<?= '' // $donnees['titre']??'' 
                                                                    ?>" /></td> -->
            </tr>
            <tr>
                <td><label for="stock">stock</label></td>
                <td><input type="number" name="stock" value="<?php if (isset($donnees['stock'])) {
                                                                    echo $donnees['stock'];
                                                                } ?>" /></td>
            </tr>
            <tr>
                <td></td>
                <?php if (isset($_GET['idProduit'])) {
                    echo '<td><input type="submit" value="Modification de produit"/></td>';
                } else {
                    echo '<td><input type="submit" value="Ajout de produit"/></td>';
                }
                ?>
            </tr>
        </table>

    </form>

<?php

}
if (isset($_GET['action']) and $_GET['action'] == "afficher") {

    if (isset($_GET['supp']) and $_GET['supp'] == 'supprimer') {
        echo "ok";
        $resultat  = $pdo->exec("DELETE FROM produit WHERE id_produit = '$_GET[idProduit]' ");
        if ($resultat == 1) {
            echo "<span style='background-color: red; color:white'>suppression effectuée avec succès</span>";
        }
        // ici j'ai rajouter ?action=afficher pour dire qu'on reste sur la même page (gestion_boutique.php)
        header("location:gestion_boutique.php?action=afficher");
    }


    $produits = $pdo->query("SELECT * FROM produit");
    echo "<table>";
    echo "<tr><th>reference</th><th>categorie</th><th>titre</th><th>photo</th><th>prix</th></tr>";
    while ($donnees = $produits->fetch(PDO::FETCH_ASSOC)) {
        // debug($donnees);
        echo "<tr><td>$donnees[reference]</td><td>$donnees[categorie]</td><td>$donnees[titre]</td><td><img src='$donnees[photo]' alt='' width='70' /></td><td>$donnees[prix]</td><td><a href='?action=afficher&supp=supprimer&idProduit=$donnees[id_produit]'>supprimer</a></td><td><a href='?action=modifier&idProduit=$donnees[id_produit]'>modifier</a></td></tr>";
    }
    echo "</table>";
}


include("../inc/bas.inc.php");
?>