<?php


include ("../../connexiondb.php");

$delete = $_POST['del'];

$req = $bdd->prepare("DELETE FROM images WHERE UrlImage= '$delete'");
$req->execute(array($delete));




header('Location: ../../index.php');
?>
