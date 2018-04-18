<?php

$idEvent = $_POST['id_evenement'];
session_start();


header( "refresh:5;url=envoieimage.php" );
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
                    $extension	= "." . pathinfo($_FILES['monfichier']['name'], PATHINFO_EXTENSION);

                    if (in_array($extension_upload, $extensions_autorisees))
                    {

                    include ("connexiondb.php");

                            $filtrage = $bdd->query("SELECT ID_Images FROM images ORDER BY ID_Images DESC LIMIT 1");

                            $donnees = $filtrage->fetch();

                            if ($donnees == NULL)
                            {
                                $donnees['ID_Images'] = 1;
                            }

                            else
                            {
                                $donnees['ID_Images'] ++;
                            }

                            $urlimage = 'uploads/' . $donnees['ID_Images'] . $extension;

                            $requete_envoie = $bdd->prepare("INSERT INTO images (UrlImage, ID_User, ID_EventValidated) VALUES(:urlimage, :idUser, :idEvent)");

                            $requete_envoie->bindValue(':urlimage', $urlimage, PDO::PARAM_STR);
                            $requete_envoie->bindValue(':idUser', $_SESSION['id'], PDO::PARAM_STR);
                            $requete_envoie->bindValue(':idEvent', $idEvent, PDO::PARAM_STR);

                            $requete_envoie->execute();

                    move_uploaded_file($_FILES['monfichier']['tmp_name'], $urlimage);

                    echo "L'envoi a bien été effectué !";

                    echo "\n Vous allez être redirigé dans quelques secondes.";

                    }
            }
    }
?>
