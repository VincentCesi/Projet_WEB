<?php
    $idEvent = $_POST['id_evenement_like'];
    include('connexiondb.php');
    session_start();

    $requeteInsertLike = $bdd->prepare('INSERT INTO voteidea(ID_Idea, ID_User) VALUES(:idEvent, :idUsers)');

    $requeteInsertLike->bindValue(':idEvent', $idEvent, PDO::PARAM_STR);
    $requeteInsertLike->bindValue(':idUsers', $_SESSION['id'], PDO::PARAM_STR);

    $requeteInsertLike->execute();
//header("Location: index.php");
?>
