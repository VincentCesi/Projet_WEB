<?php


   $title = $_POST['TitreActivite'];
   $nameAuthor = $_POST['nameAuthor'];
   $description = $_POST['description'];



    include ('connexiondb.php');

        // Requête préparée pour empêcher les injections SQL
    $requete = $bdd->prepare("INSERT INTO users (title, nameAuthor, description)
    VALUES( :title, :nameAuthor, :description)");

    $requete->bindValue(':title', title, PDO::PARAM_STR);
    $requete->bindValue(':nameAuthor', nameAuthor, PDO::PARAM_STR);
    $requete->bindValue(':description', description, PDO::PARAM_STR);

    $requete->execute();
?>
