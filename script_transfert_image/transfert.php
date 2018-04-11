<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 8000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                include ("connexiondb.php");

                    $requete = $bdd->prepare("INSERT INTO image (UrlImage) VALUES( :file_name)");
                    //$requete = $bdd->prepare("INSERT INTO images (UrlImage, Description) VALUES( :monfichier,:description)");

                    $requete->bindValue(':file_name', $_FILES['monfichier']['name'], PDO::PARAM_STR);
                    //$requete->bindValue(':description', $aled, PDO::PARAM_STR);

                    $requete->execute();

                }

        }
}
?>
