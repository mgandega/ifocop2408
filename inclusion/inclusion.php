<?php

// les inclusions permettent d'inserrer une page ou un bout de code dans une autre page

// include(), include_once(), require(), require_once()

// include()
// cette fonction permet d'inclure une page ou un bout de code dans une autre page autant de fois que l'on souhaite, mais s'il y'a une erreur dans l'inclusion ( c'est à dire le fichier à inclure), l'erreur sera affichée mais ça n'empêche pas le reste de la page de l'inclusion (inclusion.php) ne s'affichera pas .

// exemple
// include('pagee.php');
// // include('page.php');
// // include('page.php');
// echo 'hello';

// include_once()
// cette fonction permet d'inclure une page ou un bout de code dans une autre page une et une seule fois, mais s'il y'a une erreur dans l'inclusion ( c'est à dire le fichier à inclure), l'erreur sera affichée mais ça n'empêche pas le reste de la page aussi de s'afficher .

// exemple
// include_once('page.php');

// require()
// cette fonction permet d'inclure une page ou un bout de code dans une autre page autant de fois que l'on souhaite, mais s'il y'a une erreur dans l'inclusion ( c'est à dire le fichier à inclure), l'erreur sera affichée et le reste de la page de l'inclusion (inclusion.php) ne s'affichera pas .

// exemple
// require('page.php');
// require('page.php');
// require('page.php');
// echo 'dfghjklm';

// require_once()
// cette fonction permet d'inclure une page ou un bout de code dans une autre page autant de fois que l'on souhaite, mais s'il y'a une erreur dans l'inclusion ( c'est à dire le fichier à inclure), l'erreur sera affichée et le reste de la page de l'inclusion (inclusion.php) ne s'affichera pas .

// exemple
// require_once('page.php');
// require_once('page.php');
// require_once('page.php');
// echo 'dfghjklm';



