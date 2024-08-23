<?php
// pdo (php data object), c'est un objet qui nous permet d'utiliser sql pour executer des requêtes (interagir  avec la base de données)

$pdo = new PDO('mysql:host=localhost;dbname=ifocop', 'root','root');

print_r($pdo);