<?php
include("inc/init.inc.php");
include("inc/haut.inc.php");

// la fonction debug est une fonction qu'on a créeé par nous même dans init.inc.php
// debug($_POST);
// je teste si id_produit exite en POST (çàd si id_produit a été envoyé quand on cliqué sur le bouton ajouter au panier)
if(isset($_POST['id_produit'])){
    // on selectionne le produit qui contient l'id envoyé en POST (càd la valeur de id_produit)
   $produit = $pdo->query("SELECT * FROM produit  where id_produit='$_POST[id_produit]'");
   // vu que $produit n'est pas exploitable, on utilise la fonction fetch pour récupérer chaque ligne de la table produit et de le convertir en tableau associatif
   $produit_choisi = $produit->fetch(PDO::FETCH_ASSOC);
//    debug($produit_choisi);

    // on ajoute maintenant le produit en question (càd $produit_choisi) dans le panier
    // ici, on a utilisé $_POST['quantite'] car on a récupéré la quantité en POST quand on avait cliqué sur le bouton ajouter au panier (dans le fichier fiche_produit.php)
   ajouterProduitDansPanier($produit_choisi['id_produit'], $produit_choisi['prix'], $produit_choisi['titre'], $_POST['quantite']);


//    debug($_SESSION['panier']);
 
}

// affichage du panier
// debug($_SESSION);
?>
<table class='table'>
    <tr><th>titre</th><th>prix</th><th>quantité</th><th>Prix total / produit</th></tr>
    <?php
    // ici, on a choisi de mettre $_SESSION['panier']['id_produit'] car l'id du produit represente le produit 
    // on pouvait remplacer la valeur de id_produit par le prix, le titre ou la quantite (ça affiche toujours le même nombre d'élements)
    for($i=0; $i<count($_SESSION['panier']['id_produit']); $i++) {
        echo "<tr><td>".$_SESSION['panier']['titre'][$i]."</td><td>".$_SESSION['panier']['prix'][$i]."</td><td>".$_SESSION['panier']['quantite'][$i]."</td><td>".$_SESSION['panier']['prix'][$i]*$_SESSION['panier']['quantite'][$i]."</td></tr>";
    }
    echo "<tr><th></th><th></th><th>Prix total</th><th>".prixTotal()."</th></tr>";
    ?>
</table>

