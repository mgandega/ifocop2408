<?php
// Exercice 1
// Afficher des nombres allant de 100 à 5.

// for($i=100; $i>=5; $i = $i -1){
//     // $i-- => $i = $i -1
//     echo "le nombre $i <br>";
// }

// Exercice 2
// Afficher des nombres allant de 20 à 100 avec le chiffre 50 en rouge.

// for($i=20; $i<=100; $i++){
//     if($i == 50){
//         echo "le nombre <span style='color:red'>$i</span> <br>";
//     }else{
//         echo "le nombre $i <br>";
//     }
// }

// Exercice 3
// Afficher des nombres allant de 2000 à 1930.

// for($i=2000; $i>=1930; $i--){
//     echo $i.'<br>';
// }

// Exercice 4
// Afficher le titre suivant 100 fois : <h1>Titre à afficher 100 fois</h1>
// exple: <h1>Titre à afficher 1 fois</h1><h1>Titre à afficher 2 fois</h1> ...

// for($i=1; $i<=100; $i++){
//     echo "<h1>Titre à afficher $i fois</h1>";
// }

// Exercice 6
// Essayez de proposer un champ date de naissance en prévoyant les 31 jours 
// existants dans notre calendrier .
// Résultat attendu : un select qui permet de choisir une date .

// echo "<select>";

// for ($i = 1; $i <= 31; $i++) {
//     echo "<option>$i</option>";
// }

// echo "</select>";

// Exercice 7
// En utilisant la boucle for, afficher la table de multiplication du chiffre 5.
// exemple: 5x1 = 5

// for ($i = 1; $i <= 10; $i++) {
//     // $resultat = 5 * $i;
//     // echo "5 X $i  = $resultat <br>";
//     // oubien
//     echo "5 X " . $i . ' = ' . (5 * $i) . '<br>';
// }

// Exercice 8
// En utilisant deux boucles for, écrire un script qui produit le résultat ci-dessous.
// 1
// 22
// 333
// 4444
// 55555

// for($i=1; $i<=5; $i++){
//     for($j=1;$j<=$i;$i++){
//         echo $i ;
//     }
//     echo "<br>";
// }

// Exercice 9
// Déclarer une variable avec le nom de votre choix et avec la valeur 0. 
// Tant que cette variable n'atteint pas 20, il faut :

// - l'afficher .
// - incrémenter sa valeur de 2 .
// Si la valeur de la variable est égale à 10, la mettre en valeur avec la balise HTML appropriée.
// $nombre = 0;
// while ($nombre <= 20) {
//     if ($nombre == 10) {
//         echo "<strong>$nombre</strong> <br>";
//     } else {
//         echo $nombre . "<br>";
//     }
//     $nombre = $nombre + 2; // $nombre = 4 + 2;
// }


/* Afficher des nombres de 0 à 99 avec deux boucles imbriquées comme suit :

0  1  2  3  4  5  6  7  8  9
10 11 12 13 14 15 16 17 18 19
20 21 22 23 24 25 26 27 28 29
30 31 32 33 34 35 36 37 38 39
40 41 42 43 44 45 46 47 48 49
50 51 52 53 54 55 56 57 58 59
60 61 62 63 64 65 66 67 68 69
70 61 62 63 64 65 66 67 68 69
80 81 82 83 84 85 86 87 88 89
90 91 92 93 94 95 96 97 98 99

les nombres 0, 11,22,33,44,55,66,77,88,99 seront en rouge
*/

echo "<table>";
for ($ligne = 0; $ligne <= 9; $ligne++) {
    echo "<tr>";
    // pour chaque <tr> mets moi à l'intérieur des <td>
        for ($cellule=0; $cellule <=9 ; $cellule++) { 
            $resultat = $ligne*10 + $cellule ;   
            if($resultat%11 == 0){
                echo "<td><span style='color:red'>".($ligne*10 + $cellule)."<span></td>";
            }else{
                echo "<td>".($ligne*10 + $cellule)."</td>";
            }
        }
    echo "</tr>";
}
echo "</table>";

?>
