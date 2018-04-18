<?php

//header("Location: index.php");
    include('connexiondb.php');
    session_start();
    $idEvent = $_POST['id_evenement_like'];


    echo $idEvent;
    echo $_SESSION['id'];

    $requeteInsertLike = $bdd->prepare('INSERT INTO voteidea(ID_Idea, ID_User) VALUES(:idevent, :idusers)');

    $requeteInsertLike->bindValue(':idevent', $idEvent, PDO::PARAM_STR);
    $requeteInsertLike->bindValue(':idusers', $_SESSION['id'], PDO::PARAM_STR);

    $requeteInsertLike->execute();

?>
