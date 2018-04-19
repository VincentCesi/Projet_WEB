<?php


$commentaire = $_POST['commentaire'];
session_start();

include('connexiondb.php');

$requete = $bdd->prepare("INSERT INTO comments (Content, ID_User) VALUES( :commentaire, :user)");

$requete->bindValue(':commentaire', $commentaire, PDO::PARAM_STR);

$requete->bindValue(':user', $_SESSION['id'], PDO::PARAM_STR);
$requete->execute();
?>
