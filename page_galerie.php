<?php
    include("Pages/templates/bootstrap.php");
?>


<!DOCTYPE htlm>
<html>

    <script type="text/javascript">


    </script>
    <?php
    session_start();
        /*if (!isset($_SESSION['id'])) {
            header("Location: index.php");
        }*/
    ?>
    <head>
        <meta charset="utf=8" />
        <title>Boîte à idée</title>
        <?php
            include("Pages/templates/head_bde.php");
        ?>
    </head>


    <body>
        <div id="onglet" class="col-lg-12">

            <div class="col-sm-2">
                <?php
                include("Pages/templates/barre_nav.php");
                ?>
                <script>
                    $(".bar6").addClass("active");
                </script>
            </div>




            <section class="col-sm-8">
               <div class="conteneur">

        <div class="row">

        <div class="gallery">
            <h1 class="gallery-title">Galerie</h1>
        </div>
<!------ à modifier pour afficher les images depuis la bdd ---------->
            <div>

            <?php

                include ("connexiondb.php");

                $requete_url = $bdd->query("SELECT UrlImage FROM image");
                $requete = $requete_url->fetch();

                    if(!$requete==NULL)
                    {
                    do
                    {
            ?>
                        <img src="script_transfert_image/<?php echo $requete['UrlImage'];  ?>" />
                        <?php
                    } while($requete = $requete_url->fetch());
                    }
                    else
                    {
        // Traiter l'erreur
                    }   ?>

            </div>

        </div>
    </div>
            </section>

            <div class="col-sm-2">
                <?php
                if (isset($_SESSION['id'])) {

                if ($_SESSION['id'] != 0) {
                    echo "Bienvenue " . $_SESSION['email'];

                    include("Pages/templates/barre_deco.php");
                    }

                }
                ?>
            </div>
        </div>
    </body>

    <footer>
        <?php
            include("Pages/templates/mention_footer.php");
        ?>
    </footer>
</html>

<?php
    include("Pages/templates/style.css");
?>
