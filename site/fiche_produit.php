<?php
include("inc/init.inc.php");
include("inc/haut.inc.php");


if (isset($_GET['idProduit']) and !empty($_GET['idProduit'])) {
    $produits = $pdo->query("SELECT * FROM produit where id_produit= '$_GET[idProduit]'");
    // pour récupérer les catégories en tableau associatif on utilise la methode fetch 
    while ($donnees = $produits->fetch(PDO::FETCH_ASSOC)) {
        echo "
    <div class='card text-white bg-primary mb-3' style='max-width: 20rem;'>
        <div class='card-header'>$donnees[titre]</div>
        <div class='card-body'>
            <h4 class='card-title'>$donnees[titre]</h4>
            <h4 class='card-title'><img  src='$donnees[photo]' width='120' /></h4>
            <p class='card-text'>$donnees[description]</p>
            <p class='card-text'>couleur: $donnees[couleur]</p>
            <p class='card-text'>genre: $donnees[public]</p>
            <p class='card-text'>catégorie: $donnees[categorie]</p>
            <p class='card-text'>prix: $donnees[prix]</p>
            
            <form action='panier.php' method='post'>
            <input type='hidden' name='id_produit' value='$donnees[id_produit]' />
            <label for='quantite' >quantité: </label><br>";
            if($donnees['stock'] == 0){
                echo "<span style='background-color: orange; color:white'>stock épuisé</span><br>";
            }else{
                echo "<select name='quantite'>";
                if($donnees['stock']>0){
                    if($donnees['stock'] >= 5) {
                       // si le stock est supérieure à 5 on achiffe juste la quantité 5
                       echo "<option value='1'>1</option>";
                       echo "<option value='2'>2</option>";
                       echo "<option value='3'>3</option>";
                       echo "<option value='4'>4</option>";
                       echo "<option value='5'>5</option>";
                   } else {
                       // si le stock est inférieur à 5 on achiffe juste la quantité du stock 
                       for ($i = 1; $i <= $donnees['stock']; $i++) {
                           echo "<option value='$i'>$i</option>";
                       }
                   }
                }
            }
        

        echo "
            </select><br><br>
            <input type='submit' value='Ajouter au panier' />
            </form>
        </div>
    </div>";
    }
}

include("inc/bas.inc.php");
