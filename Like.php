<?php

    include('connexiondb.php');
    session_start();
    $test = 1;


    $requeteInsertLike = $bdd->prepare('INSERT INTO thumbup (ID_users, ID_eventValidated) VALUES(:idUsers, :idEvent)');
    $requeteInsertLike->bindValue(':idUsers', $_SESSION['id'], PDO::PARAM_STR);
    $requeteInsertLike->bindValue(':idEvent', $test, PDO::PARAM_STR);
    $requeteInsertLike->execute();
header("Location: index.php");
?>
