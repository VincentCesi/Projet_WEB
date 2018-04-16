<!DOCTYPE htlm>

<html>

<head>

    <title>Galerie</title>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body>

<?php

    include ("connexiondb.php");

    $requete_url = $bdd->query("SELECT UrlImage FROM image");
    $requete = $requete_url->fetch();
    $url = implode("", $requete);
    echo $url;
?>

    <div class="conteneur">

        <div class="row">

        <div class="gallery">
            <h1 class="gallery-title">Galerie</h1>
        </div>
<!------ à modifier pour afficher les images depuis la bdd ---------->
            <div>
             <!--   <img src="" class="img"> -->
            </div>

        </div>
    </div>

</body>
</html>
