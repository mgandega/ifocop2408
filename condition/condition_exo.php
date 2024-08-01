<?php
// Exercice 1 :
// Rédiger une expression conditionnelle pour tester si un nombre est à la fois un 
// multiple de 3 et de 5.

// $nombre = 16;
// if($nombre%3==0 AND $nombre%5==0){
// echo "le nombre $nombre est un multiple de 3 et de 5";
// }else{
//     echo "le nombre $nombre n'est pas un multiple de 3 ou de 5";
// }

// Exercice 2 :
// Écrire une expression conditionnelle utilisant les variables $age et
// $sexe dans une instruction if pour sélectionner une personne de sexe féminin 
// dont l’âge est compris
// entre 21 et 40 ans et afficher un message de bienvenue approprié.

// $age = 25;
// $sexe = 'feminin';

// if(($age >=21 and $age <=40) OR $sexe == 'feminin'){
//     echo "le profil correspond";
// }else{
//     echo "le profil ne correspond pas";
// }

// Exercice 3 :
// Affecter respectivement les valeurs 150, 350 et 10 aux variables prix_table, 
// prix_armoire et nombre.
// • Afficher le prix pour les 10 armoires.
// • Comparer le prix de l’armoire et de la table et afficher quel est le prix le 
// plus élevé. (ici on va mettre un "if", un "elseif" et un "else")

// $prix_table = 150;
// $prix_armoire =350;
// $nombre = 10;
// echo 'le prix des 10 armoires est : '.$prix_armoire * $nombre .'<br>';

// if($prix_armoire>$prix_table){
//     echo "le prix de l'armoire est plus élevé";
// }elseif($prix_table>$prix_armoire){
//     echo "le prix de la table est plus élevé";
// }else{
//     echo "les deux prix sont égaux";
// }

// Exercice 4 :
// Déclarer une variable $heure qui contient la valeur de type integer de votre 
// choix comprise entre 0 et 24. Créer une condition qui affiche un message si 
// l'heure est le matin, l'après-midi ou la nuit.

// $heure = 12;

// if($heure <0 OR $heure >24){
//     echo "heure invalide";
// }elseif ($heure >=0 AND $heure <=12) {
//     echo "on est le matin";
// }elseif ($heure >12 AND $heure <=18) {
//     echo "on est l'après midi";
// }elseif ($heure >18 AND $heure < 24) {
//     echo "on est le soir";
// }else{
//     echo "je ne comprend pas votre choix";
// }

// Exercice 5
// Tester ces differents pays en utilisant un switch et d'afficher un message de bienvenue comme: bienvenue en france , italie...
// Ces pays sont: france , italie, espagne, angleterre.
// N'oublier pas de mettre un defaultau cas où 

// $pays = 'italie';
// switch($pays){
//     case 'france':
//         echo 'bienvenue en france <br>';
//         break;
//     case 'italie':
//         echo 'bienvenue en italie<br>';
//         break;
//     case 'angleterre':
//         echo 'bienvenue en angleterre<br>';
//         break;
//     default:
//        echo "je ne comprends pas votre choix";
//        break;
// }