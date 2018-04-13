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


    echo password_verify($password, $userinfo['Hash']);
        if($userexist == 1 && password_verify($password, $userinfo['Hash']) ==  true){

            session_start();
                $_SESSION['id'] = $userinfo['ID'];
                $_SESSION['email'] = $userinfo['Email'];
                $_SESSION['role'] = $userinfo['ID_roles'];

            header("Location: index.php");


        }else{
             echo "Champs incomplets/incorrect";

        }
}else{
    echo "Tous les champs doivent être completes";

}
?>
