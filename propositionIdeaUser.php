<?php
header("Location: index.php");
$title = $_POST['title'];
$Author = $_POST['Author'];
$description = $_POST['description'];
$event = $_POST['event'];


include("connexiondb.php");


$requeteParticipation = $bdd->prepare('INSERT INTO ideabox (Title, Description, Author, Event )
VALUES(:title, :description , :Author, :event)');

        $requeteParticipation->bindValue(':title', $titre, PDO::PARAM_STR);
        $requeteParticipation->bindValue(':description', $description, PDO::PARAM_STR);
        $requeteParticipation->bindValue(':Author', $Author, PDO::PARAM_STR);
        $requeteParticipation->bindValue(':event', $event, PDO::PARAM_STR);


        $requeteParticipation->execute();

?>
