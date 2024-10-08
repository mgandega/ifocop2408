<?php
// les superglobals sont des tableaux internes à php et qui sont disponibles quelques soit l'espace (espace global ou l'espace local)

// $nb = 20;
// function nombre()
// {
//     // echo '<pre>';
//     // print_r($GLOBALS);
//     // echo '</pre>';
//     // $nb = $GLOBALS['nb']; // $GLOBALS permet aussi de recuperer une variable de l'espace global à l'espace local
//     // echo $nb;
//     global $nb;
//     $addition = $nb + 30;
//     echo $addition;
// }
// nombre();

// $_SERVER permet de recuperer toutes les informations du serveur
// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

// echo $_SERVER['DOCUMENT_ROOT'];

// la superglobal $_GET
// permet de transmettre et de récuperer des informations de page en page, ces informations seront affichées sur l'url 
// le point d'interrogation (?) sans rien veut dire qu'on veut afficher ce qui suit (le point d'interrogation) sur la même page
// echo "page1.php?prenom=jean'>prenom</a>"; // => echo "<a href='superglobals.php?prenom=jean'>prenom</a>";
// echo "<a href='?prenom=jean&nom=macron'>prenom</a> ";
// echo "<br>";
// si l'attribut (clé) prenom est défini sur l'url, affiches le moi
// if(isset($_GET['prenom'])){
//     echo $_GET['prenom'];
// }else{
//     echo "la clé n'est pas définie";
// }
// si l'attribut (clé) prenom et l'attribut (clé) nom sont définis sur l'url, affiches les moi


// if(isset($_GET['prenom']) and $_GET['nom']){
//     echo $_GET['prenom']." ".$_GET['nom'];
// }else{
//     echo "la clé n'est pas définie";
// }
// echo '<pre>';
// print_r($_GET);
// echo '<pre>';



// la superglobal $_POST

echo '<pre>';
print_r($_POST);
echo '</pre>';
// si on a posté des données
if (!empty($_POST)) {
    // //     echo '<pre>';
    // //     print_r($_POST);
    // //     echo '<pre>';
    echo $_POST['prenom'] . '<br>';
    echo $_POST['nom'] . '<br>';
    echo $_POST['age'] . '<br>';
    echo $_POST['date'] . '<br>';
    echo $_POST['fruit'] . '<br>';
    if (count($_POST['sport']) >= 1) {
        foreach ($_POST['sport'] as $valeur) {
            echo $valeur . '<br>';
        }
    }
} else {
    echo 'aucune donnée n\'est envoyé';
}

?>

<!-- si action ne contient pas de valeur donc action="" ou contient un diese donc action="#" (#) cela veut dire qu'on execute les données du formulaire sur la même page -->
<!-- si la methode n'est pas précisée, c'est la methode get qui sera la method par défaut (les infos s'afficheront sur l'url) -->
<form action="" method="post">
    <input type="text" name="prenom" placeholder="votre prenom svp ?"><br>
    <input type="text" name="nom" placeholder="votre nom svp ?"><br>
    <input type="number" name="age" placeholder="votre age svp ?"><br>
    <input type="date" name="date" placeholder="votre age svp ?"><br>
    <!-- <label> votre choix :</label><br> -->
    <select name='fruit'>
        <option value="banane">banane</option>
        <option value="orange">orange</option>
        <option value="mandarine">mandarine</option>
    </select>

    <label> genre :</label><br>
    femme : <input type="radio" name="genre" value="femme" placeholder="votre sexe svp ?"><br>
    homme : <input type="radio" name="genre" value="homme" placeholder="votre sexe svp ?"><br>
    autre : <input type="radio" name="genre" value="autre" placeholder="votre sexe svp ?"><br>

    <!-- textarea : <input type="textarea" name="message" placeholder="un message svp ?"/>  -->
    <textarea name="message" placeholder="un message svp ?" cols=40 rows=10></textarea><br><br>

    <label> sport :</label><br>
    football : <input type="checkbox" name="sport[]" value="football"><br>
    basketball : <input type="checkbox" name="sport[]" value="basketball"><br>
    handball : <input type="checkbox" name="sport[]" value="handball"><br>

    <input type="submit">
</form>

<?php 
$tab =['prenom'=>'jean','nom'=>'macron'];
echo '<pre>';
print_r($tab); //  affiche tous les élèments du tableau 
echo '</pre>';
// sur le navigateur on aura  ceci (sans les quôtes):
Array
(
    [prenom] => jean 
    [nom] => macron
)

unset($tab['prenom']); // suppression de l'élèment 'prenom'=>'jean'
echo '<pre>';
print_r($tab); //  affiche tous les élèments du tableau sauf le premier élèment 'prenom'=>'jean' 
echo '</pre>';

// sur le navigateur on aura ceci (sans les quôtes):
Array
(
    [nom] => macron
)

