<?php
$pdo = new PDO("mysql:host=localhost;dbname=dialogue_2024", "root", "root");

// echo '<a href="?action=ajoutBillet">Ajouter un billet</a>';
// echo '<br>';
?>
<a href="?action=ajoutBillet">Ajouter un billet</a>
<?php
if(!empty($_POST)){
    // echo '<pre>';
    // print_r($_POST);
    // echo '<pre>';
    $nom = $_POST['nom'];
    $titre = $_POST['titre'];
   $resultat = $pdo->exec("INSERT INTO billet(nom_billet,titre) VALUES('$nom','$titre')");

   if($resultat == 1){
    echo "<span style='background-color:green;color:white'>billet ajouté avec succès</span>";
   }

}
// si vous trouvez une clé qui s'appelle action sur l'url
// et que sa valeur est ajoutBillet
if (isset($_GET['action']) and $_GET['action'] == 'ajoutBillet') {
    echo "<form action='' method='post'>";
    echo "<input type='text' name='nom' placeholder='nom du billet' /><br><br>";
    echo "<textarea name='titre' placeholder='titre du billet'></textarea><br><br>";
    echo "<input type='submit' /><br><br>";
    echo "</form>";
    // echo "<form>
    //     <input type='text' /><br><br>
    //     <input type='text' /><br><br>
    //     <input type='submit' /><br><br>
    //     </form>";
}
