<?php

// Inscription
$pass = 'mdp';
$salt = sha1(microtime(true));
$hash = crypt($pass, $salt);
bdd_inscription($pseudo, $hash); // Ici

// Connexion
$pass = 'mdp';
$hash = bdd_get_hash($pseudo); // Le hash est enregistré lors de l'inscription (voir plus haut)
if($hash == crypt($pass, $hash)) {
    // Mot de passe correct
}
?>
