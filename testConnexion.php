<?php
include ('connexiondb.php');
//  Récupération de l'utilisateur et de son pass hashé
$email = $_POST['emailconnexion'];
$password = $_POST['passwordconnexion'];



if (!empty($email) AND !empty($password)){

    $requeteUsers = $bdd->prepare('SELECT * FROM users WHERE Email = :email');
        $requeteUsers->bindValue(':email', $email, PDO::PARAM_STR);
        //$requeteUsers->bindValue(':password', $hash, PDO::PARAM_STR);
        $requeteUsers->execute();

    $userinfo = $requeteUsers->fetch();
    $userexist = $requeteUsers->rowCount();

    echo $userexist . " // ";
    echo password_verify($password, $userinfo['Hash']);
        if($userexist == 1 && password_verify($password, $userinfo['Hash']) ==  true){

            session_start();
                $_SESSION['id'] = $userinfo['ID'];
                $_SESSION['email'] = $userinfo['Email'];
                $_SESSION['role'] = $userinfo['ID_roles'];

            //header("Location: profil.php?id=".$_SESSION['id']);

        echo "Welcome " . $_SESSION['email'];
        }else{

            echo "Pas la";
        }
}else{
    echo "Tous les champs doivent être completes";

}








/*$resultat = $requeteUsers->fetch();
echo $resultat;
// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($password, $resultat['Hash']);


    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['Hash'] = $resultat['Hash'];
        $_SESSION['email'] = $email;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
*/


?>
