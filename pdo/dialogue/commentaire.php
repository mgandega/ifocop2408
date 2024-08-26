<?php
$pdo = new PDO("mysql:host=localhost;dbname=dialogue_2024", "root", "root");
echo "vos commentaires :<br><br>";
if(isset($_GET['action']) and $_GET['action']=='medina'){
  $resultat =  $pdo->exec("DELETE FROM commentaire WHERE id_commentaire='$_GET[id_commentaire]'");
    if($resultat == 1){
        echo "commentaire supprimé";
    }
}
if (!empty($_POST)) {
    $pseudo = $_POST['pseudo'];
    // addslashes permet d'ajouter un antislah devant un simple ou double quôte
    // $message = htmlentities(addslashes($_POST['message']));
    $message = addslashes($_POST['message']);
    $resultat = $pdo->exec("INSERT INTO commentaire(id_billet,pseudo,message)VALUES('$_GET[idBillet]','$pseudo','$message')");

    if ($resultat == 1) {
        echo "<span style='background-color:green;color:white'>commentaire ajouté avec succès</span>";
    }
}
// si idBillet est défini sur l'url affiches moi le formulaire de commentaire  
if(isset($_GET['idBillet'])) {
    echo "<form action='' method='post'>";
    echo "<input type='text' name='pseudo' placeholder='votre pseudo'/><br><br>";
    echo "<textarea name='message' placeholder='votre message'></textarea><br><br>";
    echo "<input type='submit'/>";
    echo "</form>";
} 

if(isset($_GET["idBillet"])){
    
    $commentaires  = $pdo->query("SELECT * FROM commentaire where id_billet='$_GET[idBillet]'");
    // echo "<pre>";
    // print_r($commentaires->fetch(PDO::FETCH_ASSOC));
    // echo "</pre>";
    while ($commentaire = $commentaires->fetch(PDO::FETCH_ASSOC)) {
        echo $commentaire['pseudo'] . ' : ' . $commentaire['message'];
        echo "<button><a href='?action=medina&idBillet=$_GET[idBillet]&id_commentaire=$commentaire[id_commentaire]'>supprimer</a> </button>";
        echo "<br>";
    }
}
    