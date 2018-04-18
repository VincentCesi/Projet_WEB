<?php

    $event = 0;
   $title = $_POST['title'];

   $nameAuthor = $_POST['nameAuthor'];

   $description = $_POST['description'];

if(empty($_POST['event'])){
    $event = 0;

}else {
    $event = $_POST['event'];
}

    $validated = 0 ;
    session_start();


    include ('connexiondb.php');

        // Requête préparée pour empêcher les injections SQL
    $requete = $bdd->prepare("INSERT INTO ideabox (Title, Description, Author, Validation, Event, ID_User)
    VALUES( :title, :description, :nameAuthor, :validated, :event, :id)");

    $requete->bindValue(':title', $title, PDO::PARAM_STR);
    $requete->bindValue(':description', $description, PDO::PARAM_STR);
    $requete->bindValue(':nameAuthor', $nameAuthor, PDO::PARAM_STR);
    $requete->bindValue(':validated', $validated, PDO::PARAM_STR);
    $requete->bindValue(':event', $event, PDO::PARAM_STR);
    $requete->bindValue(':id', $_SESSION['id'], PDO::PARAM_STR);

    $requete->execute();

//header("Location: index.php");
?>
