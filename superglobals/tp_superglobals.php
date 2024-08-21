<?php
$tasks = ["Acheter du pain", "Faire du sport"];

if(!empty($_POST)){

    array_push($tasks,$_POST['ajout'] );
    echo "<ol>";
    foreach ($tasks as $cle => $task){
        echo "<li>$task</li><a href='?action=supprimer&cle=$cle'>supprimer</a>";
    }
    echo "</ol>";
}
if(isset($_GET['action']) and $_GET['action'] == 'supprimer'){
    unset($tasks[$_GET['cle']]);
}
print_r($tasks);    

?>

<form action="" method="post">
    <label>Ajouter une tache :</label><br>
    <input type="text" name="ajout" /><br><br>
    <input type="submit" />
</form>