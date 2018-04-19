<?php
header("Location: page_reportview.php");
session_start();
include('connexiondb.php');
$product = $_POST['product'];
$description = $_POST['description'];
$price = $_POST['price'];
$stock = $_POST['quantity'];
$category = $_POST['category'];
$quantity = 0;


    if(!empty($_POST['available'])){
        $available = $_POST['available'];

    }else{
        $available = 0;

    }


$requeteNewShop = $bdd->prepare("INSERT INTO shop(Product, Description, Price, Stock, Available, QuantityBought, ID_User, Id_category) VALUES (:product, :description, :price, :stock, :available, :quantitybuy, :idUser, :category");
$requeteNewShop->bindValue(':product', $product, PDO::PARAM_STR);
$requeteNewShop->bindValue(':description', $description, PDO::PARAM_STR);
$requeteNewShop->bindValue(':price', $price, PDO::PARAM_STR);
$requeteNewShop->bindValue(':stock', $stock, PDO::PARAM_STR);
$requeteNewShop->bindValue(':available', $available, PDO::PARAM_STR);
$requeteNewShop->bindValue(':quantitybuy', $quantity, PDO::PARAM_STR);
$requeteNewShop->bindValue(':idUser', $_SESSION['id'], PDO::PARAM_STR);
$requeteNewShop->bindValue(':category', $category, PDO::PARAM_STR);
$requeteNewShop->execute();
?>
