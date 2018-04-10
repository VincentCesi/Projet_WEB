<?php


try

{
        //Connexion a la bdd
    $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');

}

catch (Exception $e)

{
            //En cas d'erreur, on affiche un message et on stop tout
        die('Erreur : ' . $e->getMessage());

}


?>
