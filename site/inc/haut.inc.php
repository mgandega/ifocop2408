<!Doctype html>
<html>

<head>
    <title>Mon Site</title>
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>inc/css/style.css">

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
                } else {
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