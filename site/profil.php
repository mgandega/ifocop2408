<?php
include("inc/init.inc.php");
include("inc/haut.inc.php");
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
echo "<h3>INFORMATIONS PERSONNELLES</h3><br>";
echo "<ul>";
echo "<li>pseudo : ". $_SESSION['membre']['pseudo'].'</li><br>';
echo "<li>prenom : ". $_SESSION['membre']['prenom'].'</li><br>';
echo "<li>nom : ". $_SESSION['membre']['nom'].'</li><br>';
echo "<li>email : ". $_SESSION['membre']['email'].'</li><br>';
echo "<li>civilite : ". $_SESSION['membre']['civilite'].'</li><br>';
echo "<li>code postal : ". $_SESSION['membre']['cp'].'</li><br>';
echo "<li>adresse : ". $_SESSION['membre']['adresse'].'</li><br>';
echo "</ul>";

include("inc/bas.inc.php");