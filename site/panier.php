<?php
include("inc/init.inc.php");
include("inc/haut.inc.php");

// la fonction debug est une fonction qu'on a créeé nous même dans init.inc.php
debug($_POST);
if(isset($_POST['id_produit'])){
   $produit = $pdo->query("SELECT * FROM produit  where id_produit='$_POST[id_produit]'");
   $produit_choisi = $produit->fetch(PDO::FETCH_ASSOC);
   debug($produit_choisi);

   ajouterProduitDansPanier($produit_choisi['id_produit'], $produit_choisi['prix'], $produit_choisi['titre'], $_POST['quantite']);


   debug($_SESSION['panier']);
 
}

