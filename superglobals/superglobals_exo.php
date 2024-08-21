<?php
//  Exercice 1
//  Pour cet exercice, nous allons créer plusieurs liens en HTML (qui pointent vers la même page) avec une récupération des paramètres en PHP.
//  L'objectif est de récupérer les paramètres véhiculés par l'url sur la même page.
//   Créez une page « lien.php ».

// echo "<a href='?lien=lien1'>lien 1</a>";
// echo "<br>";
// echo "<a href='?lien=lien2'>lien 2</a>";
// echo "<br>";
// echo "<a href='?lien=lien3'>lien 3</a>";

// Exercice 2
// Créer une page avec deux liens : homme, femme. 
// Récupérer le texte du lien cliqué en affichant le message "Vous êtes un Homme" ou "Vous êtes une femme".

// echo "<a href='?sexe=femme'>femme</a>";
// echo "<br>";
// echo "<a href='?sexe=homme'>homme</a>";

// if(isset($_GET['sexe'])){
//     echo "vous êtes un(e) $_GET[sexe]";
// }

// Exercice 3
// Créer une page1 avec plusieurs liens (contexte : carte de restaurant) : pizza, salade, viande, poisson. 
// Récupérer le plat cliqué (dans la page1) et afficher-le sur la page2 en adressant un message correspondant au choix de l'internaute.
// Exemple si l'on a cliqué sur pizza : "Vous avez choisi de manger 1 pizza" .

// echo "choisissez un plat svp ?<br><br>";
// echo "<a href='?plat=pizza'>pizza</a>";
// echo "<br>";
// echo "<a href='?plat=salade'>salade</a>";
// echo "<br>";
// echo "<a href='?plat=viande'>viande</a>";
// echo "<br>";
// echo "<a href='?plat=poisson'>poisson</a>";

// if(isset($_GET['plat'])){
//     if($_GET['plat']=='pizza'){
//         echo "vous avez choisi la pizza";
//     }
//     elseif($_GET['plat']=='salade'){
//         echo "vous avez choisi la salade";
//     }
//     elseif($_GET['plat']=='viande'){
//         echo "vous avez choisi la viande";
//     }
//     elseif($_GET['plat']=='poisson'){
//         echo "vous avez choisi le poisson";
//     }else{
//         echo "je ne comprends pas votre choix";
//     }
// }

// Exercice 4
// Pour cet exercice, nous allons créer un formulaire en HTML avec une récupération des saisies en PHP.
// L'objectif est de récupérer les saisies postées sur la même page (juste au dessus du formulaire).
//  Créez une page « formulaire.php ».

// echo '<pre>';
// print_r($_POST);
// echo '<pre>';
// if(!empty($_POST)){
//     echo $_POST['prenom'];
// }
?>

<!-- <form action="" method="post" >
    <input type='text' name='prenom' placeholder='votre prénom'/><br><br>
    <input type='submit' />
</form> -->

<?php
// Exercice 5
// Créer un formulaire en affichant les saisies récupérées sur la même page. 
// Champ à prévoir (contexte : produit) : titre, couleur, taille, poids, prix, description, stock, fournisseur.

// if(!empty($_POST)){
//     echo "titre: ".$_POST['titre']."<br>";
//     echo "couleur: ".$_POST['couleur']."<br>";
//     echo "taille: ".$_POST['taille']."<br>";
//     echo "poids: ".$_POST['poids']."<br>";
//     echo "prix: ".$_POST['prix']."<br>";
//     echo "message: ".$_POST['message']."<br>";
//     echo "stock: ".$_POST['stock']."<br>";
//     echo "fournisseur: ".$_POST['fournisseur']."<br>";
// }
?>
<!-- <form action='' method='post'>
    titre: <input type='text' name='titre' placeholder="le titre"/><br>
    couleur: <select name='couleur' >bleue</option>
        <option value='verte'>verte</option>
        <option value='orange'>orange</option>
        <option value='jaune'>jaune</option>
    </select><br>
    taille: <select name='taille' >
        <option value='m'>m</option>
        <option value='xl'>xl</option>
        <option value='xxl'>xxl</option>
    </select><br>
    poids: <input type='number' name='poids' /><br>
    prix: <input type='number' name='prix' /><br>
    message<textarea name='message'></textarea><br>
    stock: <input type='number' name='stock' /><br>
    fornisseur: <input type='text' name='fournisseur'  placeholder="le fournisseur"/><br>
    <input type='submit' /><br>
</form> -->

<?php
// Exercice 7
// Créer un formulaire en affichant les saisies récupérées et en controlant que le pseudo soit compris entre 3 et 10 caractères maximum (sinon prévoir un message d'erreur). 
// Champ à prévoir (contexte : membre) : pseudo, mdp, email.

// if(!empty($_POST)){
//     if(strlen($_POST['pseudo']) >= 3 and  strlen($_POST['pseudo'])<=10){
//         echo "le nombre de caractères est bon ";
//     }else{
//         echo "erreur sur le pseudo";
//     }
// }
?>

<!-- <form action='' method='post'>
    <input type='text' name='pseudo' placeholder='votre pseudo'/><br>
    <input type='text' name='mdp' placeholder='votre mot de passe'/><br>
    <input type='text' name='email' placeholder='votre email'/><br>
    <input type='submit' /><br>
</form> -->

<?php
// Exercice 8
// La page calculatrice est un formulaire avec un menu déroulant qui nous permet de choisir le signe de l’opération (addition, soustraction, multiplication, division).

// if (!empty($_POST)) {
//     echo '<pre>';
//     print_r($_POST);
//     echo '</pre>';
//     if ($_POST['operande'] == '+') {
//         $resultat = $_POST['nombre1'] + $_POST['nombre2'];
//     } elseif ($_POST['operande'] == '-') {
//         $resultat = $_POST['nombre1'] - $_POST['nombre2'];
//     } elseif ($_POST['operande'] == '*') {
//         $resultat = $_POST['nombre1'] * $_POST['nombre2'];
//     } elseif ($_POST['operande'] == '/') {
//         $resultat = $_POST['nombre1'] / $_POST['nombre2'];
//     } else {
//         $resultat = "je ne comprends pas votre choix";
//     }
//     echo "le resultat est : " . $resultat;
// }
?>

<!-- <form action='' method='post' >
    <input type='number' name='nombre1' />
    <select name='operande'>
        <option value='+'>+</option>
        <option value='*'>*</option>
        <option value='-'>-</option>
        <option value='/'>/</option>
    </select>
    <input type='number' name='nombre2' /> <br><br>
    <input type='submit' />
</form> -->