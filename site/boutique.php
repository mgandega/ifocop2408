<?php
include("inc/init.inc.php");
include("inc/haut.inc.php");

// on divise la page en deux parties:
//- les categorie seont sur la partie gauche 
//- les produits seront sur la partie droite
?>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <?php
            // selectionnes moi toutes les categories de la table produits sans les doublons
            $categories = $pdo->query("SELECT distinct(categorie) FROM produit");
            echo "<ul>";
            while ($categorie = $categories->fetch(PDO::FETCH_ASSOC)) {
                echo "<li><a href='?categorie=$categorie[categorie]'>$categorie[categorie]</a></li>";
                // debug($categorie);
            }
            echo "</ul>";
            ?>
        </div>
        <div class="row col-sm-9">
            <?php
            // PARTIE DROITE
            // On affiche les produits par catégorie
            // ici la requête consiste à dire : Si categorie existe sur l'url et qu'elle contient une valeur
            // affiche moi les produits liés à cette valeur (categorie)
            // if(){
            // selectionnes moi tout ce qui se trouve dans la table produit qui ont comme catégorie, la catégorie récupérée sur l'url ($_GET[categorie])

            if (isset($_GET['categorie']) and !empty($_GET['categorie'])) {
                $produits = $pdo->query("SELECT * FROM produit where categorie= '$_GET[categorie]'");
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
                        <button><a href='fiche_produit.php?idProduit=$donnees[id_produit]'>details</a></button>
                    </div>
                </div>";
                }
                }
            else{
                $produits = $pdo->query("SELECT * FROM produit");
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
                         <button><a href='fiche_produit.php?idProduit=$donnees[id_produit]'>details</a></button>
                    </div>
                </div>";
            }
            }
            ?>

        </div>
    </div>
</div>











<?php
include("inc/bas.inc.php");
?>