<?php


   $title = $_POST['title'];
echo $title;
   $nameAuthor = $_POST['nameAuthor'];
 echo $nameAuthor;
   $description = $_POST['description'];
 echo $description;



    include ('connexiondb.php');

        // Requête préparée pour empêcher les injections SQL
    $requete = $bdd->prepare("INSERT INTO events (title, author, description)
    VALUES( :title, :nameAuthor, :description)");

    $requete->bindValue(':title', $title, PDO::PARAM_STR);
    $requete->bindValue(':nameAuthor', $nameAuthor, PDO::PARAM_STR);
    $requete->bindValue(':description', $description, PDO::PARAM_STR);

    $requete->execute();
?>
