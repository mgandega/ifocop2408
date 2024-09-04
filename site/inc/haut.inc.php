<!Doctype html>
<html>

<head>
    <title>Mon Site</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="/ifocop_240719/site/inc/css/style.css">
    
</head>

<body>
    <header>
        <div class="conteneur">
            <div>
                <a href="" title="Mon Site">MonSite.com</a>
            </div>
            <nav>
                <!-- customisons l'affichage :
    - si on connecte comme utilisateur ordinaire, on doit voir :  
      -  Inscription
      -  Connexion
      -  Accès à la boutique
    - si on connecte comme membre, on doit voir :
      - Deconnexion
      - Profil 
      - Panier
      - Accès à la boutique
     - si on connecte comme administrateur, on doit voir :
        - gestion boutique
        - gestion membre
        - gestion commande
        - Accès à la boutique
        - Deconnexion
    -->
                <?php
                if (isConnected()) {
                ?>
                    <a href="/ifocop_240719/site/profil.php">Profil</a>
                    <a href="/ifocop_240719/site/deconnexion.php">Deconnexion</a>
                    <a href="<?php echo RACINE_SITE; ?>boutique.php">Accès à la boutique</a>
                    <a href="<?php echo RACINE_SITE; ?>panier.php">Voir votre panier</a>
                <?php
                }
                elseif(isConnectedAndAdmin()){
                    ?>
                    <a href="/ifocop_240719/site/admin/gestion_membre.php">gestion membre</a>
                    <a href="/ifocop_240719/site/admin/gestion_boutique.php">gestion boutique</a>
                    <a href="/ifocop_240719/site/admin/gestion_commande.php">gestion commande</a>
                    <a href="<?php echo RACINE_SITE; ?>boutique.php">Accès à la boutique</a>
                    <a href="<?php echo RACINE_SITE; ?>deconnexion.php">Deconnexion</a>
                  <?php
                }
                else {
                ?>
                    <a href="/ifocop_240719/site/inscription.php">Inscription</a>
                    <a href="/ifocop_240719/site/connexion.php">Connexion</a>
                    <a href="<?php echo RACINE_SITE; ?>boutique.php">Accès à la boutique</a>
                <?php
                }
                ?>

            </nav>
        </div>
    </header>
    <section>
        <div class="conteneur">