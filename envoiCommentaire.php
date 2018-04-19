<?php


$commentaire = $_POST['commentaire'];
session_start();

include('connexiondb.php');

$requete = $bdd->prepare("INSERT INTO comments (Content, PostDate, ID_User) VALUES( :commentaire, :date, :user)");

$requete->bindValue(':commentaire', $commentaire, PDO::PARAM_STR);
$requete->bindValue(':date', $commentaire, PDO::PARAM_STR);
$requete->bindValue(':user', $_SESSION['id'], PDO::PARAM_STR);
$requete->execute();
?>
