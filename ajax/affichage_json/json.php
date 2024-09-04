<?php
$personnes = ['prenom'=>'pierre','nom'=>'macron','age'=>27];

// cette fonction permet d' encoder le tableau en json 
$pren = json_encode($personnes);
// maintenant le tableau est devenu du texte json
// print_r($prenoms);
echo $pren; //ici on a du texte comme "bonjour" par exemple;