<?php
// $_COOKIE permet de stocker et de conserver des infromations sur le navigateur de l'internaute
// pour mettreces information, on utilise la methode setCookie() qui prend en 1e parametre le nom du cookie, en 2e la valeur du cookie et en 3e parametre la duree d'expiration du cookie
// les cookies permet de faire aussi du webmarketing, publicité ...

// pour la duree de validité du cookie on additionne le timestamp (le temps écoulé depuis le 1e janvier 1970) + la duree d'expiration (en seconde)
echo time();
$duree = time() + 1*60*60*24*365;

// inserrer un cookie
// setcookie('nom_cookie','contenue_cookie','duree_cookie');
setcookie('prenom','pierre',$duree);
// modifier un cookie
setcookie('prenom','martin',$duree);

// recuperer d'un cookie
echo "<br> le cookie s'appelle ".$_COOKIE['prenom'].'<br>';

echo '<pre>';
    print_r($_COOKIE);
echo '</pre>';

setcookie('langue','fr',$duree);

if(isset($_COOKIE['langue']) and $_COOKIE['langue']=='fr'){
    echo "vous avez choisi la langue française";
}