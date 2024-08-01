<?php 
// les conditions sont des structures conditionnnelles qui permettent de verifier si ce qui se trouvent entre les accolades est vraie pour ensuite l'executer .

// if / elseif / else 

// syntaxe : 
// si (condition est vraie){
// code à executer
// }
//sinon{
    // ce code ne va pas être executé
//}

//exemple:
// $age = 12;
// ici on verifie (teste) si l'age est égal à 12 ans
// on pose une question : est ce que la valeur de $age(12) est égal à 12 ?
// si oui on exécute ce qui se trouve entre les accolades

// if / else
// if($age == 12){
//     // code à executer
//     echo "j'ai 12 ans";
// }else{
//     // else : sinon 
//     // c'est la condition par défaut
//     // code qui ne sera pas éxecuté
//     echo "ton age n'est conforme";
// }
// $age = 12;
// // if / elseif / else
// // on peut mettre en place un seul if, un seul else mais plusieurs elseif
// // les deux égal (==) c'est l'egalité mathématique
// if($age == 12){
//     // code à executer
//     echo "j'ai 12 ans";
// }elseif($age == 14){
//     echo "j'ai 14 ans";
// }
// elseif($age == 16){
//     echo "j'ai 16 ans";
// }
// else{
//     // else : sinon 
//     // c'est la condition par défaut
//     // code qui ne sera pas éxecuté
//     echo "ton age n'est conforme";
// }

/****************************** OPÉRATEURS *****************************/

// = : c'est un signe d'assignation ou d'affectation
// == : c'est l'égalité mathématique  (2 + 2 = 4), elle teste seulement les valeurs mais pas les types
// === : c'est une égalité qui teste les valeurs et les types
// <, <=, >, >= : comparaison de supériorités
// ! :  cela veut dire "n'est pas" ou "contraire de" exemple : if (!($age == 12)), on aura le contraire de true donc false
// != : cela veut dire différent de . exemple : if($age != 12), on aura false car la valeur de $age est 12 et $age n'est pas différent de 12 donc on aura false
// AND ou && :  permet de faire la comparaison entre deux ou plusieurs conditions mais il faut que toutes les conditions soient vraies pour retourner true (càd pour executer ce qui se trouvent entre les accolades)
// OR ou || : permet de faire la comparaison entre deux ou plusieurs conditions mais il faut qu'au moins qu'une des conditions soient vraies pour retourner true (càd pour executer ce qui se trouvent entre les accolades)
// XOR : permet de faire la comparaison entre deux ou plusieurs conditions mais il faut qu'une et une seule condition soit vraie pour executer ce qui se trouvent entre les accolades
// % : c'est le modulo, qui est le reste de la division exemple: 20%2 => 0

// $age = 12; // la valeur de '12' est 12 
// $ville = 'paris';
// $genre='feminin';
// if($age == 12 AND $ville == 'paris'){ // il faut que toutes condition soient vraies
// if($age == 12 OR $ville == 'paris'){ // il faut au moins qu'une condition soient vraies
// if($age == 12 XOR $ville == 'paris'){ // il faut qu'une  et une seule condition soient vraies
// if($age >= 12 and $age <=20){ // l'age est compris entre 12 et 20
// if($age != 12){  // la valeur $age est 12, je teste si 12 est différent de 12, comme la réponse est false je continue mes testes
// if($age == 12 ){  // 
//     echo 'age conforme';
// }elseif($age == 14){
//     echo "j'ai 14 ans";
// }
// elseif($age == 16){
//     echo "j'ai 16 ans";
// }
// else{
//     // else : sinon 
//     // c'est la condition par défaut s'execute si aucune condition n'est vraie
//     // code qui ne sera pas éxecuté
//     echo "ton age n'est pas conforme";
// }

/**** switch  ****/

// $prenom = 'jean';

// // ici on switche et on teste les valeurs de la variable (switchée)
// // si une valeur correspond,on arrête de tester les autres valeurs grace au break
// // le break permet d'arrêter les testes
// // le swtich / case teste seulement les égalités
// switch($prenom){
//     case 'paul':
//         echo "bonjour paul";
//         break;
//     case 'jean':
//         echo "bonjour jean";
//         break;
//     case 'martin':
//         echo "bonjour martin";
//         break;
//     default:
//         echo "aucun prénom ne correspond";
// }


