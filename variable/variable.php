<?php
// Une variable est un espace memoire qui contient une information stockée temporairement .
// syntaxe:
// $nom_de_la_variable = "valeur";
// exemple: 
// le $ permet de reconnaitre la variable (il précede le nom de la variable)
// prenom est le nom de la variable 
// le = n'est pas une égalité mathématique mais un signe d'affectation ou d'assignation
// jean est la valeur de la variable 
// le ; est la fin de l'instruction
// $prenom = "paul";
// $prenom = "jean";

// ici jean a écrasé paul, donc la variable contient maintenant jean
// echo $prenom; // affiche moi le contenu de la variable prenom

// les double quôtes interprêtent les variables
// les simple quôtes n'interprêtent pas les variables
// echo "bonjour $prenom <br>";
// echo 'bonjour $prenom ';
?>
<!-- bonjour <?php //echo $prenom; 
                ?> -->
<?php
// la concatenation, c'est la fait de lier une chaine de caractères avec une autre autre chaine ou variable
// echo 'bonjour '.$prenom;
/**** les types de variables ou de valeurs ******/
// seuls les chaines de caractères (string) s'entourent de simples ou de double quôtes
// $prenom = 'jean'; // type String
$age = 12; // type integer
$autorisation = true; // ou false , type boolean (bool)
$nombre = 12.5; // type float (double, decimal)

// gettype permet de retourner le type d'une variable
// echo gettype($nombre);

// var_dump permet de débugger une variable
// var_dump($nombre,$age);


// Afficher : Bonjour, je m'appelle jean et j'ai 12 ans , en utilisant les variables , la concaténation et les simples quôtes .

$prenom = 'jean';

// echo "bonjour $prenom"; // ici $prenom est intéprété par les doubles quôtes

// echo 'bonjour $prenom'; // ici $prenom n'est pas interprété par les simples quôtes

// echo 'bonjour '.$prenom.' ...';


// echo 'je m\'appelle '.$prenom.' et j\'ai '.$age.' ans';

// echo 'je m\'appelle ';
// echo $prenom;
// echo ' et j\'ai ';
// echo $age;
// echo ' ans';

// jamais de égal dans un echo

// echo "je m'appelle $prenom et j'ai $age ans";

// Assignation par reference
// $fruit1 = "orange";
// $fruit2 = "pomme";

// $fruit1 = &$fruit2; // $fruit1 et $fruuit2 sont liés (mariés)

// // $fruit2 = 'mandarine';

// echo $fruit1;
// echo "<br>";
// echo $fruit2;

/****** les constantes *******/

// $prenom = "jean";
// $prenom = "paul";

// define('VILLE', 'paris');
// $ville = 'paris';
// echo VILLE;
// echo __LINE__;
// echo '<br>';
// echo __FILE__;
// echo '<br>';
// echo __DIR__;
// echo '<br>';

// $nombre1 = 10;
// $nombre2 = 12;
// $nombre = $nombre1 + $nombre2;
// echo $nombre;

// les variables sont sensibles à la casse .
// $prenom != $Prenom

/********* noms de variables autorisés *******/
// $prenom, $preNom, $pren_nom, $prenom123, $_prenom, $monPrenomEst

/*********** noms de variables non autorisés **********/
// $123prenom, $preno-nom, $prenom!, $pren nom

// $age = 12; // ici on met 12 dans  $age
// $age == '12'; // ici on compare la valeur de $age qui est 12
// $age === '12'; // ici on compare la valeur et le type de $age qui est de type string et de valeur 12

?>