<?php
include("inc/init.inc.php");
include("inc/haut.inc.php");


?>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <?php
                
            ?>
        </div>
        <div class="row col-sm-9">
            <?php
            $produits = $pdo->query("SELECT * FROM produit");
            while ($donnees = $produits->fetch(PDO::FETCH_ASSOC)) {
                echo "
                <div class='card text-white bg-primary mb-3' style='max-width: 20rem;'>
                    <div class='card-header'>$donnees[titre]</div>
                    <div class='card-body'>
                        <h4 class='card-title'>$donnees[titre]</h4>
                        <h4 class='card-title'><img  src='$donnees[photo]' width='120' /></h4>
                        <p class='card-text'>$donnees[description]</p>
                        <p class='card-text'>couleur: $donnees[couleur]</p>
                        <p class='card-text'>taille: $donnees[taille]</p>
                        <p class='card-text'>genre: $donnees[public]</p>
                        <p class='card-text'>prix: $donnees[prix]</p>
                        <button><a href=''>details</a></button>
                    </div>
                </div>";

            }
            ?>

        </div>
    </div>
</div>











<?php
include("inc/bas.inc.php");
?>