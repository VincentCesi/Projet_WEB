<?php
$titre = $_POST['Titre'];
$Author = $_POST['Author'];
$description = $_POST['description'];
$dateStart = $_POST['dateStart'];
$dateEnd = $_POST['dateEnd'];
$dateAccept = $_POST['dateAccept'];

echo $titre;
echo $Author;
echo $dateStart;
echo $dateEnd;
echo $dateAccept;

include("connexiondb.php");
 $Attendees = 0;

$requeteParticipation = $bdd->prepare('INSERT INTO eventvalidated (Title, AcceptationDate, Author, Description, StartDate, EndDate, Attendees)
VALUES(:titre, :dateAccept, :Author, :description ,:dateStart, :dateEnd, :attendees)');

        $requeteParticipation->bindValue(':titre', $titre, PDO::PARAM_STR);
        $requeteParticipation->bindValue(':dateAccept', $dateAccept, PDO::PARAM_STR);
        $requeteParticipation->bindValue(':Author', $Author, PDO::PARAM_STR);
        $requeteParticipation->bindValue(':description', $description, PDO::PARAM_STR);
        $requeteParticipation->bindValue(':dateStart', $dateStart, PDO::PARAM_STR);
        $requeteParticipation->bindValue(':dateEnd',$dateEnd, PDO::PARAM_STR);
        $requeteParticipation->bindValue(':attendees', $Attendees, PDO::PARAM_STR);

        $requeteParticipation->execute();

//header("Location: index.php");
?>


