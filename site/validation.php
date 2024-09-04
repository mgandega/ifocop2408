<?php
include("inc/init.inc.php");
include("inc/haut.inc.php");


echo "<span style='background-color:green;color:white'>Votre achat est validé</span>";
echo "<p>vous pouvez payer par cheque ou par espèce à l'adresse suivant:<br>
6, rue des puits, 92160, Antony
</p>";

// SUPPRESSION DU PANIER
if(isset($_SESSION['panier']['id_produit']) and !empty($_SESSION['panier']['id_produit'])){
    unset($_SESSION['panier']);
}