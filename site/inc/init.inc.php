<?php
// toutes les informations qui sont censées êtres présentes sur toutes les pages 
// devront être ajoutées ici

// base de données 
$pdo = new PDO("mysql:host=localhost;dbname=ecom_ifocop","root","root");

// session
session_start();

// constante
define("RACINE_SITE","/ifocop_240719/site/");
