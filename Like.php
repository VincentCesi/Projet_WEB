<?php
    $idEvent = $_POST['id_evenement'];
    include('connexiondb.php');
    session_start();



    $requeteInsertLike = $bdd->prepare('INSERT INTO thumbup (ID_User, ID_eventValidated) VALUES(:idUsers, :idEvent)');
    $requeteInsertLike->bindValue(':idUsers', $_SESSION['id'], PDO::PARAM_STR);
    $requeteInsertLike->bindValue(':idEvent', $idEvent, PDO::PARAM_STR);
    $requeteInsertLike->execute();
header("Location: index.php");
?>
