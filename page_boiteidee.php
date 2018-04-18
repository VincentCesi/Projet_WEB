<?php
    include("Pages/templates/bootstrap.php");
?>


<!DOCTYPE htlm>
<html>

    <script type="text/javascript">


    </script>
    <?php
    session_start();
        if (!isset($_SESSION['id'])) {
            header("Location: index.php");
        }
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
                    $(".bar3").addClass("active");
                </script>
            </div>




            <section class="col-sm-8">
<?php
     include('connexiondb.php');
     $requeteEvent = $bdd->query('SELECT * FROM events ORDER BY ID_Event');
     while ($event = $requeteEvent->fetch())
     {
?>
                <div class="table_event row">
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-12">
                                <form method="post" action="page_boiteidee_info.php" >
                                <div class="Titre"  id="titre"><?= $event['Title']; ?></div>
                                    <br>
                                <div class="Description"  id="description"><?= $event['Description']; ?></div>
                                    <br>
                                <div class="Auteur"   id="auteur"><?= $event['Author']; ?></div>
                                    <input type='hidden' name="id_evenement" id="id_evenement" value="<?= $event['ID_Event']; ?>"/>

                            <div class="col-sm-2" >
                        <button type="submit">Voir les informations sur cet évènement</button>
                    </div>
                                </form>

                            </div>
                        </div>
                    </div>



                </div>
<?php
            }
?>
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
                <ul>
                    <li><a href="soumissionEvenementUser.php">Proposer un évènement</a></li>
                    <?php
                        if (isset($_SESSION['role'])) {
                            if ($_SESSION['role'] == 4){?>
                            <li><a href="soumissionEvenementAdmin.php">Proposer un évènement validé</a></li>
                            <?php
                        }
                    }

                    ?>


                </ul>

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
