<?php
header("Location: page_reportview.php");
session_start();
include('connexiondb.php');

    $requeteNewShop = $bdd->prepare("INSERT INTO shop(Product, Price, urlImage, Stock, Stock, Available, ) FROM reportation  WHERE ID_Report = ?");
    $requeteNewShop->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $requeteNewShop->bindValue(':name', $name, PDO::PARAM_STR);
    $requeteNewShop->bindValue(':email', $email, PDO::PARAM_STR);
    $requeteNewShop->bindValue(':hash', $hash, PDO::PARAM_STR);
    $requeteNewShop->bindValue(':role', $role, PDO::PARAM_STR);

?>
