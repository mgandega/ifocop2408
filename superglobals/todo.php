<?php

session_start();
// Étape 1:
// 1.	Créez un fichier todo.php.
// 2.	Déclarez une variable $tasks qui est un tableau contenant une liste de tâches par défaut (par exemple : "Acheter du pain", "Faire du sport").
// 3.	Affichez un formulaire HTML qui permet à l'utilisateur d'ajouter une nouvelle tâche. Le formulaire doit utiliser la méthode POST.

// Étape 2: Gestion des données du formulaire avec $_POST
// 1.	Vérifiez si le formulaire a été soumis en utilisant $_POST.
// 2.	Si une nouvelle tâche est soumise, ajoutez-la au tableau $tasks.

// $tasks = ['acheter du pain', 'faire du sport'];

$_SESSION['course1'] = 'acheter du pain';
$_SESSION['course2'] = 'faire du sport';

if (!empty($_POST)) {
    $new =  $_POST['ajout_tache'];
    array_push($_SESSION, $new);

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
}
// Étape 3: Affichage des tâches avec une boucle
// 1.	Utilisez une boucle foreach pour parcourir le tableau $tasks et afficher chaque tâche dans une liste ordonnée (<ol>).
// 2.	Ajoutez un lien "Supprimer" à côté de chaque tâche. Le lien doit pointer vers le même fichier todo.php en utilisant la méthode GET pour envoyer l'index de la tâche à supprimer.

// echo "<ol>";
// foreach ($tasks as $key => $value) {
//     echo "<li>$value</li>";
// }
// echo "</ol>";

// Étape 4: Suppression d'une tâche avec $_GET
// 1.	Vérifiez si une tâche doit être supprimée en utilisant $_GET.
// 2.	Si l'index de la tâche à supprimer est passé dans l'URL, utilisez unset() pour la retirer du tableau $tasks.
// if(isset($_GET['supprimer'])){
//     unset($tasks[$_GET['supprimer']]);
// }
// echo "<ol>";
// foreach ($tasks as $key => $value) {
//     echo "<li>$value <a href='?supprimer=$key'>supprimer</a> </li>";
// }
// echo "</ol>";

?>
<form action="" method="post">
    <input type='text' name='ajout_tache' placeholder='ajouter une nouvelle tache' /><br><br>
    <input type='submit' />
</form>