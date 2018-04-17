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

            include('connexiondb.php');
            $requeteEvent = $bdd->prepare("SELECT * FROM eventValidated WHERE ID_EventValidated = ?");
            $requeteEvent->execute(array($idEvent));
            $event = $requeteEvent->fetch();

        ?>
        <div id="onglet" class="col-lg-12">
            <div class="col-sm-2">
                <?php
                include("Pages/templates/barre_nav.php");
                ?>
                <script>
                    $(".bar2").addClass("active");
                </script>
            </div>

            <section class="col-sm-8">
                <div class="row">

                    <div class="col-sm-12">
                        <form action="page_proposer_event.php" method="post">
                            <div class="col-sm-12">
                                <h3><div class="Titre"  id="titre"><?= $event['Title']; ?></div></h3>
                             </div>

                                <br>
                            <div class="Description"  id="description"><?= $event['Description']; ?></div>
                                <br>
                            <div class="Auteur"   id="auteur">Auteur: <?= $event['Author']; ?></div>
                                <br>
                            <div class="DateStart"   id="DateStart">Début des inscriptions: <?= $event['StartDate']; ?></div>
                                <br>
                            <div class="EndStart"   id="EndStart">Fin des inscriptions: <?= $event['EndDate']; ?></div>
                        </form>

                    </div>




                </div>
            </section>

            <div class="col-sm-2">

                <form class="go_event" action="participationEvent.php" method="post">
                        <input type="submit" value="Participation à l'event" name="Participate" id="Participate">
                     <input type='hidden' name="id_evenement" Value="<?= $event['ID_EventValidated']; ?>"/>
                    </form>

                <form action="Like.php" method="post">
                <input type="submit" value="J'aime" name="Like" id="Like">
                     <input type='hidden' name="id_evenement" Value="<?= $event['ID_EventValidated']; ?>"/>
                </form>

                <form action="" method="">
                    <input type="submit" value="Images" name="" id="">
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
