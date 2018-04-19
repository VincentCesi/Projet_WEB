<?php
header("Location: index.php");
session_start();
$title = $_POST['title'];
$Author = $_POST['Author'];
$description = $_POST['description'];

$validation = 0;
if(!empty($_POST['event'])){
    $event = $_POST['event'];

}else{
    $event = 0;

}


include("connexiondb.php");


$requeteParticipation = $bdd->prepare('INSERT INTO ideabox (Title, Description, Author, Validation, Event, ID_User)
VALUES(:title, :description , :Author,:validation, :event, :iduser)');

$requeteParticipation->bindValue(':title', $title, PDO::PARAM_STR);
$requeteParticipation->bindValue(':description', $description, PDO::PARAM_STR);
$requeteParticipation->bindValue(':Author', $Author, PDO::PARAM_STR);
$requeteParticipation->bindValue(':validation', $validation, PDO::PARAM_STR);
$requeteParticipation->bindValue(':event', $event, PDO::PARAM_STR);
$requeteParticipation->bindValue(':iduser', $_SESSION['id'], PDO::PARAM_STR);



$requeteParticipation->execute();

?>
