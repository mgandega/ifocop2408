<?php
// toutes les informations qui sont censées êtres présentes sur toutes les pages 
// devront être ajoutées ici

// base de données 
$pdo = new PDO("mysql:host=localhost;dbname=ecom_ifocop","root","root");

// session
session_start();

// constante
define("RACINE_SITE","/ifocop_240719/site/");

// fonction
// Si l'utilisateur a un statut et que son statut est egal à 0, il est considéré comme membre (ordinaire)
function isConnected(){
    if(isset($_SESSION['membre']['statut']) and $_SESSION['membre']['statut'] == 0){
        return true;
    }else{
        return false;
    }
}

