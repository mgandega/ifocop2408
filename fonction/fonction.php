<?php

declare(strict_types=1);
// Une fonction est un morceau de code permettant d'automatiser un traitement ou de donner un affichage particulier

/*********** fonction utilisateur *********/

// syntaxe :
// function nomFonction(){
//}

// $nombre1 = 10;
// $nombre2 = 24;
// // une fonction doit être appeler pour qu'elle s'execute
// function calcul($nb1, $nb2){
// // $nb1 = $nombre1;
// // $nb2 = $nombre2;

//     $resultat = $nb1 + $nb2;
//     echo "le résultat est : $resultat";
// }

// calcul($nombre1, $nombre2);

// parametre par défaut
// $nombre1 = 10;
// $nombre2 = 24;
// // une fonction doit être appelée pour qu'elle s'execute
// function calcul($nb1, $nb2 = 30)
// {
//     // $nb1 = $nombre1;
//     // $nb2 = $nombre2;

//     $resultat = $nb1 + $nb2;
//     echo "le résultat est : $resultat <br>";
// }

// calcul($nombre1);
// calcul($nombre1, $nombre2);

// return
// $nombre1 = 10;
// $nombre2 = 24;
// // une fonction doit être appelée pour qu'elle s'execute
// function calcul($nb1, $nb2 = 30)
// {
//     // ESPACE LOCAL
//     // $nb1 = $nombre1;
//     // $nb2 = $nombre2;

//     $resultat = $nb1 + $nb2;
//     // return permet de retourner une information de l'espace local à l'espace global .
//     return "le résultat est : $resultat <br>"; 
//     // echo "hello"; // tout ce qui se trouve après un return ne s'executeront pas 
// }

// // ici l'information est stockée en mémoire, avec le echo on arrive à l'afficher
// $resultat1 = calcul($nombre1);
// echo $resultat1;
// $resultat2 = calcul($nombre1, $nombre2);
// echo $resultat2;

// Espace Global / espace local 

// une fonction doit être appelée pour qu'elle s'execute
// $ville = 'lisbonne';
// function pays()
// {
//     global $ville; // global permet de récupérer une variable de l'espace global à l'espace local
//     $ville = 'dakar';
//     echo $ville;
//     echo "<br>";

// }
// echo $ville;
// pays();

// typage

// $nombre = 12; // 12 => 12.0
// // function addition(int $nombre):string
// function addition(int $nombre):void
// {
//     echo 'hello';
//     // return 'hello';
// }
// addition($nombre);

/*************** FONCTION PRÉDÉFINIE ************/

$texte = "Bonjour tout le monde";

//  strlen permet de compter le nombre de caractères

// echo strlen($texte);

// str_replace() c'est une fonction qui permet de remplace une chaine de caracteres par une autre dans une phrase
// echo str_replace('Bonjour','Bonsoir',$texte);

// str_repeat() permet de répéter une chaine de caractères un certain nombre de fois

// echo str_repeat('hello <br>', 5);

// $prenom = ' '; // l'espace est un caractere donc a une valeur ($prenom n'est pas vide)
// $prenom = false; // ici on au juste une chaine de caractere vide

// // ici $prenom contient une valeur donc ce qui se trouve entre les accolade retournera true
// // if ($prenom) => if ($prenom == true)
// if ($prenom == true) {
//     echo 'hello';
// } else {
//     echo 'au revoir';
// }

// $prenom = '';
// // isset() permet de tester si une variable est définie oubien si une variable existe (s'il est typé)
// if (isset($prenom)) {
//     echo 'hello';
// } else {
//     echo "au revoir";
// }

// empty() permet de tester si variable est vide
// $prenom = '';
// if(empty($prenom)){
//     echo 'la variable est vide';
// }else{
//     echo "la variable n'est pas vide";
// }

// str_word_count() permet de compter le nombre de mot dans une phrase

// $texte = "BONJOUR tout le monde";

// echo str_word_count($texte);

// var_dump(); permet de debugger
// var_dump($texte);
// par contre print_r permet de debugger aussi mais s'utilise surtout dans les tableaux 

// echo strtolower($texte); // permet de mettre le texte en miniscule
// echo strtoupper($texte); // permet de mettre le texte en majuscule

// ternaire

$age = 20;
if ($age >= 18) {
    echo "tu es majeur";
} else {
    echo "tu es mineur";
}

// on teste si age >=18 , si oui on retourne tu es majeur sinon on retourne tu es mineur
$resultat = ($age >= 18) ? "tu es majeur" : "tu es mineur";

// echo $resultat;

// si $age contient une valeur , on affiche la valeur sinin on affiche 'pas de valeur'
// echo $age??'pas de valeur';
?>

<?php
// echo $age;
?>
<?=  $age ?>




