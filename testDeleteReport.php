<?php
header("Location: page_reportview.php");

include('connexiondb.php');
$idReport = $_POST['id_report'];
    $requeteReportDelete = $bdd->prepare("DELETE FROM reportation  WHERE ID_Report = ?");
    $requeteReportDelete->execute(array($idReport));

?>
