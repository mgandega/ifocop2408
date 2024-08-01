<?php

declare(strict_types=1); // cette fonction permet d'être très strict sur les arguments (valeurs) à envoyer dans la methode
/**************************** ExO 1 *****************************/
// Créer une fonction from scratch qui s'appelle concatenation(). 
// Elle prendra deux arguments de type string. Elle devra retourner la concatenation 
// des deux. Exemple : argument 1 = Antoine Argument 2 = Griezmann; 
// Resultat : je m'appelle Antoine Griezmann (on mettra la chaine Griezmann comme important)

// function concatenation(string $arg1, string $arg2):void
// {
//     // si on retourne rien avec echo par exemple , on mettra comme type de retour void
//     echo $arg1.' <strong>'.$arg2.'</strong>'; 
// }

// concatenation('antoine', 'greizmann');

/**************************** ExO 2 *****************************/

// Créer une fonction from scratch qui s'appelle somme(), elle prendra seulement 
// un paramètre par defaut $argument2 (avec sa valeur) . 
// Elle devra retourner la somme de deux variables ($argument1 et $argument2) 

// $argument1 = 10;
// function somme($arg2 = 20):mixed
// {
//     // initialement nous avions dans $arg2 la valeur 20 ($arg2 =20), en appelant la fonction somme() on a fait passer la valeur de $argument1 (10) à la variable $arg2, du coup la valeur initiale de $arg2 (20) sera écrasée par la valeur finale de $argument1 (10) donc $arg2 contient maintenant la valeur 10 ($arg2 = 10) au lieu de 20
//     // $arg2 = 20;
//     // $arg2 = 10;

//     global $argument1; // global permet de rendre disponible $argument1 de l'espace global à l'espace local
//     return $argument1 + $arg2;
//     // echo $argument1; // jamais de echo apres un return, ce code ne sera jamais executé

// }

// echo somme($argument1);

/**************************** ExO 3 *****************************/

// Créer une fonction from scratch qui s'appelle estIlMajeure(). Elle prendra un argument 
// de type int. Elle devra retourner un boolean. Si age >= 18 elle doit retourner true 
// si age < 18 elle doit retourner false Exemple : age = 5 ==> false age = 34 ==> true .
// Vous pouvez utilisez un if,elseif et else

// $age = 20;
// function estIlMajeure(int $age):bool|string
// {
//     if($age >= 18){
//         $resultat = true;
//     }elseif($age < 18){
//         $resultat = false; // si vous ne voyais rien au cas où l'age est strictement inférieur à 18 c'est normal car il y'a certains navigateurs qui n'affichent rien et il y'en a d'autres qui affichent juste 0
//     }else{
//         $resultat = "je ne comprends pas";
//     }
//     return $resultat;
// }

// echo estIlMajeure($age);
/**************************** ExO 4 *****************************/

// Créer une fonction from scratch qui s'appelle plusGrand(). Elle prendra deux 
// arguments de type int. Elle devra retourner le plus grand des deux.

// $arg1 = 12;
// $arg2 = 24;
// function plusGrand(int $arg1, int $arg2)
// {
//     if ($arg1 > $arg2) {
//         echo "le plus grand est $arg1";
//     } elseif ($arg2 > $arg1) {
//         echo "le plus grand est $arg2";
//     } else {
//         echo "les deux nombres sont égaux";
//     }
// }
// plusGrand($arg1, $arg2);

/**************************** ExO 5 *****************************/

// Créer une fonction from scratch qui s'appelle plusPetit(). Elle prendra trois 
// arguments de type int. Elle devra retourner le plus petit des trois.


// $arg1 = 12;
// $arg2 = 36;
// $arg3 = 23;
// function plusPetit(int $arg1, int $arg2, int $arg3)
// {
//     if ($arg1 < $arg2 && $arg1 < $arg3) {
//         return "le plus petit est : $arg1";
//     } elseif ($arg2 < $arg1 && $arg2 < $arg3) {
//         return "le plus petit est : $arg2";
//     } elseif ($arg3 < $arg1 && $arg3 < $arg2) {
//         return "le plus petit est : $arg3";
//     } else {
//         return "les valeurs sont égales";
//     }
// }

// echo plusPetit($arg1, $arg2, $arg3);

/**************************** ExO 6 *****************************/

// creer une fonction qui prend 2 paramètres (saison et temperature) et qui permet d'afficher une phrase comme ceci :
// "Nous sommes en hiver et il fait 20 degrés" .
// Ici "hiver" et "20" seront remplacés respectivement par les variables $saisons et $temperature
// Il faut prévoir de mettre un "S" à la fin de dégré si dégré doit être au pluriel et sans "S" si c'est le contraire .

// $saison = 'hiver';
// $temperature = 12;
// function meteo($saison, $temperature){

//     // if($temperature >=2 || $temperature <=-2) {
//     //     $degre =  "degrés";
//     // }else{
//     //     $degre = "degré";
//     // }
//     // if($saison == 'printemps'){
//     //     $val = 'au';
//     // }else{
//     //     $val = 'en';
//     // }
//     $degre = ($temperature >=2 || $temperature <=-2) ?"degrés":"degré";
//     $val = ($saison == 'printemps')?'au':'en';

//     echo "nous sommes $val $saison et il fait $temperature $degre";
// }

// meteo($saison, $temperature);

