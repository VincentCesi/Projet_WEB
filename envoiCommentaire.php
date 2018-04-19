<?php

header("Location: page_evenement.php");
$commentaire = $_POST['commentaire'];
$idEvent = $_POST['id_evenement'];
session_start();
$now = date_create('now')->format('Y-m-d H:i:s');
include('connexiondb.php');

$requete = $bdd->prepare("INSERT INTO comments (Content, PostDate, ID_User, ID_EventValidated) VALUES( :commentaire, :date, :user, :idevent)");

$requete->bindValue(':commentaire', $commentaire, PDO::PARAM_STR);
$requete->bindValue(':date', $now, PDO::PARAM_STR);
$requete->bindValue(':idevent', $idEvent, PDO::PARAM_STR);
$requete->bindValue(':user', $_SESSION['id'], PDO::PARAM_STR);
$requete->execute();

?>
