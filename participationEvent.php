<?php

    include('connexiondb.php');
    session_start();
    $idEvent = $_POST['id_evenement'];

    $requeteParticipate = $bdd->prepare('INSERT INTO participate (ID_User, ID_eventValidated) VALUES(:idUsers, :idEvent)');
    $requeteParticipate->bindValue(':idUsers', $_SESSION['id'], PDO::PARAM_STR);
    $requeteParticipate->bindValue(':idEvent', $idEvent, PDO::PARAM_STR);
    $requeteParticipate->execute();

header("Location: index.php");
?>
