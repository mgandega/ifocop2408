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
function isConnectedAndAdmin(){
    if(isset($_SESSION['membre']['statut']) and $_SESSION['membre']['statut'] == 1){
        return true;
    }else{
        return false;
    }
}

function debug($val){
    echo "<pre>";
    print_r($val);
    echo "</pre>";
}
////////////////////////// PARTIE PANIER /////////////////////////
function creationDuPanier(){
    $_SESSION['panier'] = [];
    $_SESSION['panier']['id_produit'] = [];
    $_SESSION['panier']['titre'] = [];
    $_SESSION['panier']['quantite'] = [];
    $_SESSION['panier']['prix'] = [];
}


function ajouterProduitDansPanier($id_produit,$prix,$titre,$quantite){
// avant de mettre un produit dans le panier, il faut d'abord créer le panier
creationDuPanier();

// ici on recherche si le produit existe déja dans le panier (particulierement dans $_SESSION['panier']['id_produit'])
// si oui, la fonction retournera la clé correspondant (qui peut être de type string ou int) 
// si non, il retournera false
// le produit est representé par l'id (id_produit) car il est unique
   $position = array_search($id_produit, $_SESSION['panier']['id_produit']);

   ///// debut exo ///
   $array = [2,5,12];
   // je teste si la valeur 5 se trouve dans le tableau
   $resultat =array_search();
   debug($resultat);
   /// fin exo //////

   if($position != false){
    // si le produit existe déja dans panier

   }else{
    // si on vient juste d'ajouter un nouveau produit dans le panier
   }


}