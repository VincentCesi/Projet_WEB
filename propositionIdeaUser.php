<?php


   $title = $_POST['title'];

   $nameAuthor = $_POST['Author'];

   $description = $_POST['description'];
    $event = $_POST['event'];
    $validated = 0 ;
    echo $event;
    session_start();


    include ('connexiondb.php');

        // Requête préparée pour empêcher les injections SQL
    $requete = $bdd->prepare("INSERT INTO ideabox (Title, Description, Author, Validation, Event)
    VALUES( :title, :Author, :description, :validated, :event)");

    $requete->bindValue(':title', $title, PDO::PARAM_STR);
    $requete->bindValue(':description', $validated, PDO::PARAM_STR);
    $requete->bindValue(':Author', $nameAuthor, PDO::PARAM_STR);
    $requete->bindValue(':description', $description, PDO::PARAM_STR);
    $requete->bindValue(':validated', $validated, PDO::PARAM_STR);
    $requete->bindValue(':event', $event, PDO::PARAM_STR);
    //$requete->bindValue(':id', $_SESSION['id'], PDO::PARAM_STR);

    $requete->execute();

header("Location: index.php");
?>
