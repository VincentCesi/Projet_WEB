<?php
$titre = $_POST['Titre'];
$author = $_POST['nameAuthor'];
$description = $_POST['description'];
$dateStart = $_POST['dateStart'];
$dateEnd = $_POST['dateEnd'];
$image = $_POST['Image'];
$dateAccept = $_POST['dateAccept'];


include("connexiondb.php");
 $Attendees = 1;

$requeteParticipation = $bdd->prepare('INSERT INTO participate (Title, Author, Description, AcceptionDate,StartDate, EndDate, urlImage, Attendees)
VALUES(:titre, :description, :dateAccept ,:dateStart, :dateEnd, :image)');
        $requeteParticipation->bindValue(':titre', $titre, PDO::PARAM_STR);
        $requeteParticipation->bindValue(':author', $author, PDO::PARAM_STR);
        $requeteParticipation->bindValue(':description', $description, PDO::PARAM_STR);
        $requeteParticipation->bindValue(':dateAccept', $dateAccept, PDO::PARAM_STR);
        $requeteParticipation->bindValue(':dateStart', $dateStart, PDO::PARAM_STR);
        $requeteParticipation->bindValue(':dateEnd',$dateEnd, PDO::PARAM_STR);
        $requeteParticipation->bindValue(':image', $image, PDO::PARAM_STR);


        $requeteParticipation->execute();

header("Location: index.php");
?>


