<?php

// Inscription
$pass = 'mdp';
$salt = sha1(microtime(true));
$hash = crypt($pass, $salt);
bdd_inscription($pseudo, $hash); // Ici

// Connexion
password_verify();
    // Mot de passe correct
}
?>
