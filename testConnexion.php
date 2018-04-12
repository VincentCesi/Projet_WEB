<?php
include ('connexiondb.php');
//  Récupération de l'utilisateur et de son pass hashé
var $email = $_POST['email'];

$request = $bdd->prepare('SELECT Email, Hash FROM users WHERE Email = :email');

    $requeteUsers->bindValue(':email', $email, PDO::PARAM_STR);


// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}


?>
