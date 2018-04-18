<?php
header("Location: index.php");

include('connexiondb.php');
session_start();
$description = $_POST['report'];

    $requeteReport = $bdd->prepare('INSERT INTO reportation (Description, ID_User) VALUES(:description ,:idUsers)');
    $requeteReport->bindValue(':description', $description, PDO::PARAM_STR);
    $requeteReport->bindValue(':idUsers', $_SESSION['id'], PDO::PARAM_STR);
    $requeteReport->execute();

?>
