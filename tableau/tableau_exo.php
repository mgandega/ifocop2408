<?php
// EXERCICE 1
// Déclarer un tableau qui stocke les informations suivantes :
// France : Paris
// Allemagne : Berlin
// Italie : Rome
// Afficher les valeurs de tous les éléments du tableau en utilisant une boucle.

// => veut dire associé à
// $pays = ['France'=>'Paris','Allemegne'=>'Berlin','Italie'=>'Rome'];
// foreach($pays as $valeur){
//     echo $valeur.'<br>';
// }
// foreach ($pays as $key => $value) {
//     echo $value.'<br>';
//     # code...
// }


// EXERCICE 2
// En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires. Puis, tester si le chiffre 42 est dans le tableau et afficher un message en conséquence. Enfin, afficher le contenu de votre tableau avec var_dump.

// $tab = [];
// for ($i = 0; $i < 10; $i++) {
//     $val = rand(20, 50);
//     $tab[] = $val;
//     if ($val == 42) {
//         echo "<span style='color:green'>votre numéro de change, bravo .....</span>";
//         break; // permet de sortir de la boucle
//     }

// }
// echo '<pre>';
// var_dump($tab);
// echo '</pre>';

// EXERCICE 3
// En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires. Puis, trier les valeurs dans deux tableaux distincts. Le premier contiendra les valeurs inférieures à 50 et le second contiendra les valeurs supérieures ou égales à 50. Enfin, afficher le contenu des deux tableaux.

// $tab = [];
// $tab_inferieur_a_50 = [];
// $tab_superieur_a_50 = [];

// for ($i = 0; $i < 10; $i++) {
//     $val =  rand(1, 100);
//     $tab[] = $val;
//     if ($val < 50) {
//         $tab_inferieur_a_50[] = $val;
//     } elseif ($val > 50) {
//         $tab_superieur_a_50[] = $val;
//     }
// }

// echo "les nombres inférieurs à 50 : <br>";
// echo '<pre>';
// print_r($tab_inferieur_a_50);
// echo '</pre>';
// echo "les nombres supérieurs à 50 : <br>";
// echo '<pre>';
// print_r($tab_superieur_a_50);
// echo '</pre>';

// EXERCICE 4
// En utilisant le tableau ci-dessous, afficher seulement les pays qui ont une population supérieure ou égale à 20 millions d'habitants.

// $pays_population = array(
//     'France' => 67595000,
//     'Suede' => 9998000,
//     'Suisse' => 8417000,
//     'Kosovo' => 1820631,
//     'Malte' => 434403,
//     'Mexique' => 122273500,
//     'Allemagne' => 82800000,
// );

// echo "les pays qui ont une population supérieure à 20000000 sont : <br>";
// foreach ($pays_population as $key => $value) {
//     if ($value > 20000000) {
//         echo $key.'<br>';
//     }
// }

// EXERCICE 5
// En utilisant le tableau ci-dessous, compter le nombre d'éléments du tableau.

//    $pays_population = array(
//       'France' => 67595000,
//       'Suede' => 9998000,
//       'Suisse' => 8417000,
//       'Kosovo' => 1820631,
//       'Malte' => 434403,
//       'Mexique' => 122273500,
//       'Allemagne' => 82800000,
//    );
// count($pays_population) => sizeof($pays_population)
// echo count($pays_population);

// EXERCICE 6
// Quelle syntaxe permet d'afficher le deuxième élément du tableau $cocktails ?

// $cocktails = array('Mojito', 'Long Island Iced Tea', 'Gin Fizz', 'Moscow mule');
// echo $cocktails[1];

// EXERCICE 7
// Quelle syntaxe permet d'afficher l'âge de Manuel ?

//    $personnes = array(
//       'Jean' => 16,
//       'Manuel' => 19,
//       'André' => 66
//    );
// echo "l'age de manuel est :$personnes[Manuel]";

//    echo '<pre>';
//    print_r($personnes['Manuel']);
//    echo '</pre>';

// EXERCICE 8
// Créer une fonction from scratch qui s'appelle dernierElementTableau(). Elle prendra un argument de type array. Elle devra retourner le dernier élement du tableau. Si l'array est vide, il faudra retourner null;

// $personnes = ['pierre','paul','jacques'];
// // // le dernier index est le nombre d'élément - 1
// // echo  $personnes[count($personnes)-1]; // 3 -1
// // echo  $personnes[3-1]; 
// // echo  $personnes[2]; 

// function dernierElementTableau(array $personnes): void
// {
//     // count($personnes)-1 me permet tout simplement de trouver le dernier index
//     echo $personnes[count($personnes) - 1];
// }
// dernierElementTableau($personnes);

// EXERCICE 9
// Créer une fonction from scratch qui s'appelle verificationPassword(). Elle prendra un argument de type string. Elle devra retourner un boolean qui vaut true si le password fait au moins 8 caractères et false si moins.

// $texte = 'bonjour';

// function verificationPassword(string $arg)
// {
//     if (strlen($arg) >= 8) {
//         $resultat = 'true';
//     } else {
//         $resultat = 'false';
//     }
//     return $resultat;
// }
// echo verificationPassword($texte);

// EXERCICE 10
// Créer une fonction from scratch qui s'appelle remplacerLesLettres(). Elle prendra un argument de type string. Elle devra retourner cette même string mais en remplacant les e par des 3, les i par des 1 et les o par des 0 Exemple :

// input : "Bonjour les amis" ==> Output : B0nj0ur l3s am1s
// input : "Les cours de programmation Web sont trops cools" ==> Output : L3s c0urs d3 pr0grammat10n W3b s0nt tr0ps c00ls

// $texte = "Bonjour les amis";
// $texte = "Les cours de programmation Web sont trops cools";
// function remplacerLesLettres(string $arg){
//    $texte1 = str_replace('e','3',$arg);
//    $texte2 = str_replace('i','1',$texte1);
//    $texte3 = str_replace('o','0',$texte2);
//    return $texte3;
// }
// echo remplacerLesLettres($texte);

// function remplacerLesLettres(string $arg){
//    $texte1 = str_replace(['e','i','o'],['3','1','0'],$arg);
//    return $texte1;
// }
// echo remplacerLesLettres($texte);



