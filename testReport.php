<?php
header("Location: index.php");

include('connexiondb.php');
session_start();
$description = $_POST['report'];

    $requeteInsertLike = $bdd->prepare('INSERT INTO participate (Description, ID) VALUES(:description ,:idUsers)');
    $requeteInsertLike->bindValue(':description', $_SESSION['id'], PDO::PARAM_STR);
    $requeteInsertLike->bindValue(':idUsers', $description, PDO::PARAM_STR);
    $requeteInsertLike->execute();

?>
