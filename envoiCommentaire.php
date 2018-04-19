<?php

header("Location: page_evenement.php");
$commentaire = $_POST['commentaire'];
$idEvent = $_POST['id_evenement'];
session_start();

include('connexiondb.php');

$requete = $bdd->prepare("INSERT INTO comments (Content, ID_User, ID_EventValidated) VALUES( :commentaire, :user, :idevent)");

$requete->bindValue(':commentaire', $commentaire, PDO::PARAM_STR);
$requete->bindValue(':idevent', $idEvent, PDO::PARAM_STR);
$requete->bindValue(':user', $_SESSION['id'], PDO::PARAM_STR);
$requete->execute();

?>
