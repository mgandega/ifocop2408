<?php
include("inc/init.inc.php");
include("inc/haut.inc.php");

// la fonction debug est une fonction qu'on a créeé nous même dans init.inc.php
// debug($_POST);
if(isset($_POST['id_produit'])){
   $produit = $pdo->query("SELECT * FROM produit  where id_produit='$_POST[id_produit]'");
   $produit_choisi = $produit->fetch(PDO::FETCH_ASSOC);
//    debug($produit_choisi);

   ajouterProduitDansPanier($produit_choisi['id_produit'], $produit_choisi['prix'], $produit_choisi['titre'], $_POST['quantite']);


//    debug($_SESSION['panier']);
 
}

// affichage du panier
debug($_SESSION);
?>
<table class='table'>
    <tr><th>titre</th><th>prix</th><th>quantité</th><th>Prix total</th></tr>
    <?php
    // ici, on a choisi de mettre $_SESSION['panier']['id_produit'] car l'id du produit represente le produit 
    // on pouvait remplacer la valeur de id_produit par le prix, le titre ou la quantite (ça affiche toujours le même nombre d'élements)
    for($i=0; $i<count($_SESSION['panier']['id_produit']); $i++) {
        echo "<tr><td>".$_SESSION['panier']['titre'][$i]."</td><td>".$_SESSION['panier']['prix'][$i]."</td><td>".$_SESSION['panier']['quantite'][$i]."</td><td>".$_SESSION['panier']['prix'][$i]*$_SESSION['panier']['quantite'][$i]."</td></tr>";
    }
    ?>
</table>

