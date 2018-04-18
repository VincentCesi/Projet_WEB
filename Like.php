<?php

    include('connexiondb.php');
    session_start();
    $idEvent = $_POST['id_evenement'];


    $requeteInsertLike = $bdd->prepare('INSERT INTO voteevent (ID_User, ID_Event) VALUES(:idUsers, :idEvent)');
    $requeteInsertLike->bindValue(':idUsers', $_SESSION['id'], PDO::PARAM_STR);
    $requeteInsertLike->bindValue(':idEvent', $idEvent, PDO::PARAM_STR);
    $requeteInsertLike->execute();
header("Location: index.php");
?>
