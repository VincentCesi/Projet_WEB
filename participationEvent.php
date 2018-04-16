<?php

session_start();

include("connexiondb.php");
 $test = 4;

$requeteParticipation = $bdd->prepare('INSERT INTO participate (ID, ID_EventValidated) VALUES(:id, :idEvent) ');
        $requeteParticipation->bindValue(':id', $_SESSION['id'], PDO::PARAM_STR);
        $requeteParticipation->bindValue(':idEvent', $test, PDO::PARAM_STR);
$requeteParticipation->execute();

header("Location: index.php");
?>


