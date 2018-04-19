<?php
header("Location: page_evenement.php");

include('connexiondb.php');
$idReport = $_POST['id_comment'];
    $requeteReportDelete = $bdd->prepare("DELETE FROM comments WHERE ID_Comment = ?");
    $requeteReportDelete->execute(array($idReport));

?>
?>
