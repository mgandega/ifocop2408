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
            <label for='quantite' >quantité: </label><br>
            <select name='quantite'>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            </select><br><br>
            <input type='submit' value='Ajouter au panier' />
            </form>
        </div>
    </div>";
    }
    }

    include("inc/bas.inc.php");