<?php
// ici on verifie si le pseudo ou l'email envoyé en post par le formulaire, est ce cette information existe déja ?
// - si oui je verifie est ce le mot de passe envoyé en post aussi correspond au mot de passe de la même personne dans la table membre
// si tout est ok, on affiche juste "ça matche"

// nb: on utlise rowCount() pour tester si cette personne existe belle et bien