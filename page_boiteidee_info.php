<?php
    include("Pages/templates/bootstrap.php");
?>

<!DOCTYPE htlm>
<html>
    <?php
    session_start();
        if (!isset($_SESSION['id'])) {
            header("Location: index.php");

        }

    ?>
    <head>
        <meta charset="utf=8" />
        <title>Accueil</title>

        <?php
            include("Pages/templates/head_bde.php");
        ?>
    </head>


    <body>
        <?php

            $idEvent = $_POST['id_evenement'];
            echo $idEvent;
            include('connexiondb.php');
            $requeteEvent = $bdd->prepare("SELECT * FROM events WHERE ID_Event = ?");
            $requeteEvent->execute(array($idEvent));
            $event = $requeteEvent->fetch();
        ?>
        <div id="onglet" class="col-lg-12">
            <div class="col-sm-2">
                <?php
                include("Pages/templates/barre_nav.php");
                ?>
                <script>
                    $(".bar3").addClass("active");
                </script>
            </div>

            <section class="col-sm-8">
                <div class="row">

                    <div class="col-sm-12">
                          <form  >
                                <div class="Titre"  id="titre"><?= $event['Title']; ?></div>
                                    <br>
                                <div class="Description"  id="description"><?= $event['Description']; ?></div>
                                    <br>
                                <div class="Auteur"   id="auteur">Auteur: <?= $event['Author']; ?></div>
                                    <input type='hidden' name="id_evenement" Value="<?= $event['ID_Event']; ?>"/>
                        </form>

                    </div>





                </div>
            </section>

            <div class="col-sm-2">
                <form class="go_event" action="Like.php" method="post">
                <input type="submit" value="J'aime" name="Like" id="Like">
                </form>


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
