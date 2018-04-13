<?php
include ('connexiondb.php');
//  Récupération de l'utilisateur et de son pass hashé
$email = $_POST['email'];
$password = $_POST['password'];

$requeteUsers = $bdd->prepare('SELECT Hash FROM users WHERE Email = :email');

    $requeteUsers->bindValue(':email', $email, PDO::PARAM_STR);

$resultat = $requeteUsers->fetch();
echo $resultat;
// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($password, $resultat['Hash']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['Hash'] = $resultat['Hash'];
        $_SESSION['email'] = $email;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}


?>
