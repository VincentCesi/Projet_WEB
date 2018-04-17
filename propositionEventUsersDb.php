<?php


   $title = $_POST['title'];

   $nameAuthor = $_POST['nameAuthor'];

   $description = $_POST['description'];

    session_start();


    include ('connexiondb.php');

        // Requête préparée pour empêcher les injections SQL
    $requete = $bdd->prepare("INSERT INTO events (Title, Description, Author, ID_User)
    VALUES( :title, :nameAuthor, :description, :id)");

    $requete->bindValue(':title', $title, PDO::PARAM_STR);
    $requete->bindValue(':nameAuthor', $nameAuthor, PDO::PARAM_STR);
    $requete->bindValue(':description', $description, PDO::PARAM_STR);
    $requete->bindValue(':id', $_SESSION['id'], PDO::PARAM_STR);
    $requete->execute();

header("Location: index.php");
?>
