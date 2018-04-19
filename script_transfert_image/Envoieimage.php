<!DOCTYPE htlm>

<html>
    <head>
        <title>Stock d'images</title>
    </head>
    <body>
        <h3>Envoi d'une image</h3>
        <?php
        $idEvent = $_POST['id_evenement'];
        ?>
        <form action="transfert.php" method="post" enctype="multipart/form-data">
            <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
                <input type='hidden' name="id_evenement" Value="<?= $idEvent ?>"/>
            </p>
        </form>
    </body>
</html>
