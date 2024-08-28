<?php
include("inc/init.inc.php");
include("inc/haut.inc.php");

session_destroy();
header("Location:connexion.php");

include("inc/bas.inc.php");
