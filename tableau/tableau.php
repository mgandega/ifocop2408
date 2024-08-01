<?php
// un tableau est une variable qui peut contenir plusieurs valeurs 

// tableau numéroté 
// un tableau numéroté contient des valeurs liées à des index implicites sous forme de numéro
// syntaxe:
// $personnes = array();
// $personnes = [];
// dans un tableau le comptage se fait à partir de zéro (0)
// $personnes = ['pierre','paul','jacques'];

// echo $personnes; // on n'affiche jamais un tableau avec un echo mais plutôt avec print_r
// echo '<pre>';
// print_r($personnes[1]); // on affichera jacques
// echo '</pre>';

// $personnes[] = 'pierre';
// $personnes[] = 'paul';
// $personnes[] = 'jacques';

// $personnes = ['pierre','paul','jacques',['martin','durand']];
// echo '<pre>';
// // le tableau à l'intérieur correspond à la clé 3
// print_r($personnes[3][1]);
// echo '</pre>';

// pierre est lié à l'index numéro 0 mais c'est le premier élément du tableau

// $personnes = ['pierre', 'paul', 'jacques', 'martin'];
// $personnes[] = 'macron';
// echo '<pre>';
// print_r($personnes);
// echo '</pre>';
// ces deux fonctions permettent de retourner le nombre d'élements dans un tableau
// echo sizeof($personnes); 
// echo count($personnes);

// sizeof($personnes) => 4
// for ($i = 0; $i < sizeof($personnes); $i++) {
//     echo $personnes[$i] . '<br>';
// }

// tableau associatif
// un tableau associatif est un tableau qui contient des valeurs liées à des index (clé, indice) explicite sous forme de texte

// $personnes = ['prenom' => 'pierre', 'nom' => 'macron', 'age' => 48,['fruit' => 'orange', 'legume' => 'carotte']];
// $personnes = ['prenom' => 'pierre', 'nom' => 'macron', 'age' => 48];

// echo $personnes['age']; // affichera 48
// echo '<pre>';
// print_r($personnes);
// echo '</pre>';
// echo '<pre>';
// var_dump($personnes);
// echo '</pre>';

// // pour chaque élement du tableau récupères moi sa valeur
// foreach($personnes as $valeur){
//     echo $valeur .'<br>';
// }
// pour chaque élement du tableau récupères moi sa clé et sa valeur correspondante
// le premier est toujours la clé et le second toujours la valeur
// foreach($personnes as $key => $valeur){
//     echo $key .' correspond à la valeur '.$valeur.'<br>';
// }

// tableau multidimensionnel
//c'est un tableau qui ressemble au table d'une base de données donc il contient des lignes avec des données 
// exemple

// $personnes = ['prenom' => 'pierre', 'nom' => 'macron', 'age' => 48];
// echo '<pre>';
// print_r($personnes);
// echo '</pre>';
// $personnes = [
//     ['prenom' => 'julien', 'nom' => 'macron', 'age' => 48],
//     ['prenom' => 'robert', 'nom' => 'duhammel', 'age' => 24],
//     ['prenom' => 'jean', 'nom' => 'diop', 'age' => 32]
// ];
// echo '<pre>';
// print_r($personnes);
// print_r($personnes[1]['nom']);
// echo '</pre>';

// on boucle avec foreach pour récuperer les prenoms

// echo '<pre>';
// print_r($personnes);
// echo '</pre>';

// foreach ($personnes as $val) {
//     // echo '<pre>';
//     // print_r($val);
//     // echo  '<br>';
//     echo $val['prenom'];
//     echo '</br>';
// }

// on peut aussi inserrer des données dans un tableau comme suit :
// $nombre = [];
// $nombre[] = 12;
// $nombre[] = 25;

// echo '<pre>';
// print_r($nombre);
// echo '</pre>';

// fonctions liées aux tableaux
$voitures = [
    'Citroen' => 'DS3',
    'Renault' => 'Clio',
    'Peugeot1' => '306',
    'Peugeot2' => 306
];
// array_keys(); // elle retourne les clés d'un tableau par rapport à sa valeur;
// $resultat = array_keys($voitures, 306);
// echo '<pre>';
// print_r($resultat);
// echo '</pre>';
// foreach ($resultat as $key => $value) {
//     echo $value.'<br>';
// }

// array_values(); // retourne toutes les valeurs d'un tableau
// $resultat = array_values($voitures);
// $resulat=  [];
// $resultat[] = 'DS3';
// $resultat[] = 'Clio';
// $resultat[] = '306';
// $resultat[] = 306;
// echo '<pre>';
// print_r($resultat);
// echo '</pre>';

// array_key_exists // cette fonction teste si une clé existe dans un tableau, elle retourne true si c'est le cas ou false si ce n'est pas le cas
// echo array_key_exists('Citroen',$voitures);

// if(array_key_exists('Citroen',$voitures)){
//     echo "bonne marque";
// }

// needle : ce qu'on recherche
// haystack : l'endroit où on doit le chercher (tableau)
// $resultat = array_search('306',$voitures);
// echo $resultat;
// echo '<pre>';
// print_r($resultat);
// echo '</pre>';

// in_array() // permet de vérifier si une valeur existe dans un tableau
// echo in_array(306, $voitures);

// si une fonction retourne un booleén c'est parcequ'elle doit être utilisé dans une condition
// if(in_array(306, $voitures)){

// }

// array_count_values() // 
// $resultat = array_count_values($voitures);
// echo $resultat; // jamais de echo pour un tableau
// echo '<pre>';
// print_r($resultat);
// echo '</pre>';

// array_merge(); // cette fonction permet de fusionner des tableaux et elle peut prendre plusieurs tableaux

// $fruits1 = ['pomme','orange'];
// $fruits2 = ['poire','mandarine'];

// $resultat = array_merge($fruits1,$fruits2);
// echo '<pre>';
// print_r($resultat); 
// echo '</pre>';

// $couleurs = ['bleu','vert'];
// array_push // permet d'ajouterdes valeurs à la fin du tableau et retourne le nombre d'élément du tableau
// $resultat = array_push($couleurs,'jaune','orange');

// echo '<pre>';
// print_r($couleurs); // elle affiche le tableau modifié
// echo '</pre>';
// $resultat = array_pop($couleurs);

// echo '<pre>';
// print_r($resultat);
// echo '</pre>';
// echo '<pre>';
// print_r($couleurs); // elle affiche le tableau modifié
// echo '</pre>';

$couleurs = ['bleue', 'verte', 'rouge', 'Verte'];

// $resultat = array_shift($couleurs);
// echo '<pre>';
// print_r($resultat); 
// echo '</pre>';
// echo '<pre>';
// print_r($couleurs); 
// echo '</pre>';
// $resultat = array_unshift($couleurs,'orange');
// echo '<pre>';
// print_r($resultat); 
// echo '</pre>';
// echo '<pre>';
// print_r($couleurs); 
// echo '</pre>';

// array_unique() // elle permet de supprimer les doublons
// $resultat = array_unique($couleurs);
// echo '<pre>';
// print_r($resultat); 
// echo '</pre>';

// $prenoms = array('Pierre', 'Antoine', 'Jean');
// sort() : elle trie les valeurs par croissant
// sort($prenoms);
// if(sort($prenoms)){
//     echo "affichage par ordre croissant";
// }
// echo '<pre>';
// print_r($prenoms);
// echo '</pre>';
// le r veut dire reverse
// rsort() permet de trier les valeurs par ordre décroissant
// rsort($prenoms);
// echo '<pre>';
// print_r($prenoms);
// echo '</pre>';
// $prenoms = ["pierre"=>24,'paul'=>22,'jacques'=>34];
// ksort() permet de trier les valeurs par ordre croissant selon les clé
// ksort($prenoms);
// echo '<pre>';
// print_r($prenoms);
// echo '</pre>';

// asort() permet de trier les élément du tableau par ordre croissant selon les valeurs
// asort($prenoms);
// echo '<pre>';
// print_r($prenoms);
// echo '</pre>';

// echo date("d/m/Y");


// function calcul(...$nombre)
// {
//     echo '<pre>';
//     print_r($nombre);
//     echo '<pre>';
//     // echo array_sum($nombre); // cette fonction permet de calculers les valeurs d'un tableau
//     // utiliser la boucle foreach pour calculer la somme des valeurs du tableau
//     $nb = 0;
//     foreach ($nombre as $value) {
//         // à la premiere tour de boucle, on aura $nb qui vaut 0 + $value qui vaut 2 => 0 + 2 et le resultat sera stocké dans $nb. Du coup $nb aura la valeur 2 (à la 1ere tour de boucle)
//         // à la deuxieme tour de boucle, on aura $nb qui vaut maintenant 2 + $value qui vaut 4 => 2 + 4 et le resultat sera stocké dans $nb. Du coup $nb aura la valeur 6 (à la 2ere tour de boucle)
//         // ainsi de suite ...
//         $nb += $value;
//     }
//     echo "le résultat est : $nb";
// }
// calcul(2, 4, 6, 14);

// $prenom = "jean";
// grace au & 'et commercial', toute modification de $prenom dans l'espace local affectera $prenom qui est dans l'espace local
// $prenom de l'espace local et $prenom de l'espace global ont la meme reference (identifiant)
// function presentation(&$prenom):void
// {
//     $prenom = 'durand';
//     echo $prenom;
//     echo '<br>';
// }
// presentation($prenom);
// echo $prenom;

// $prenom = 'martin';

// function prenom($pren='jacques'){
//     // $pren='jacques';
//     // $pren='martin';
//     return $pren; // ici l'information est seulement retournée mais elle est ne s'affiche pas car on a pas mis de echo
//     echo 'salut robert'; // pas d'affichage après un return
// }
// echo prenom('martin');
