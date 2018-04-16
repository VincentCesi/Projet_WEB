<!DOCTYPE htlm>

<html>
   <head>
      <title>Stock d'images</title>
   </head>
   <body>
      <h3>Envoi d'une image</h3>
       <form action="transfert.php" method="post" enctype="multipart/form-data">
           <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
           </p>
       </form>
   </body>
</html>
