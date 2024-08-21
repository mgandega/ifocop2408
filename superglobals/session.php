<?php
//  les sessions sont des superglobals qui permmetent de nous renseigner sur des informations comme : 
    // - la duréee de connexion de l'internaute
    // - l'heure de sa déconnexion
    // - les différentes pages qu'il a visité
    // ...

    // sur toutes les pages on doit écrire session_start() tout en haut de la page
    session_start(); // permet de démarrer une session
    
    // // ajouter une session
    $_SESSION['prenom'] = 'martin';
    $_SESSION['nom'] = 'durand';
    $_SESSION['age'] = 24;
    
    
    // //vider un ou plusieurs éléments dans une session
    
    unset($_SESSION['age']);
    
    // // modifier une valeur dans une session
    $_SESSION['prenom'] = 'pierre';

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';

    // // supprimer une session
    session_destroy();

