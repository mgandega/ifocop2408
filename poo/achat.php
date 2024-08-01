<?php
include('Person.php');
include('Produit.php');

// Person
// $robert = new Person();
// $robert->setPrenom('robert');
// $robert->setNom('macron');
// $robert->setAge(48);

// $maxime = new Person();
// $maxime->setPrenom('maxime');
// $maxime->setNom('macron');
// $maxime->setAge(27);

// $alain = new Person();
// $alain->setPrenom('alain');
// $alain->setNom('macron');
// $alain->setAge(32);

// // produit
// $pantalon = new Produit;
// $pantalon->setNom('pantalon');
// $pantalon->setCouleur('bleue');
// $pantalon->setPrix(120);

// $chemise = new Produit;
// $chemise->setNom('chemise');
// $chemise->setCouleur('rouge');
// $chemise->setPrix(180);

// $chaussette = new Produit;
// $chaussette->setNom('chaussette');
// $chaussette->setCouleur('noire');
// $chaussette->setPrix(30);

$robert  = new Person('robert', 'macron', 48);
$maxime  = new Person('maxime', 'macron', 48);
$alain  = new Person('alain', 'macron', 48);


echo $robert->getPrenom().' a acheté 3 '.$pantalon->getNom().'(s) de couleur '.$pantalon->getCouleur().' à '.$pantalon->getPrix().' euros';
// * Robert a acheté 3 pantalons de couleur bleue à 120 euros 
// * Maxime a acheté 5 chemises de couleur rouge à 180 euros 
// * Alain a acheté 2 paires de  chaussettes de couleur noire à 30 euros 

// mgandega@gmail.com