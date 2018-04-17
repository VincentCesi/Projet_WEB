<?php
    include("Pages/templates/bootstrap.php");
?>

<!DOCTYPE htlm>
<html>

    <script type="text/javascript">


    </script>
    <?php
    session_start();


      //  if (!isset($_SESSION['id'])) {
      //      header("Location: index.php");
      //  }
    ?>
    <head>
        <meta charset="utf=8" />
        <title>Accueil</title>
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
                    $(".bar2").addClass("active");
                </script>
            </div>
<?php
            include('connexiondb.php');
            $requeteEvent = $bdd->query('SELECT * FROM events ORDER BY id');


            while ($event = $requeteEvent->fetch())
            {
                ?>
            <section class="table_event col-sm-8">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="liste_event col-sm-12">
                                <form action="post" >
                                <div class="Titre"  id="titre"><?= $event['Title']; ?></div>
                                <br>
                                <div class="Description"  id="description"><?= $event['Description']; ?></div>
                                <br>
                                <div class="Auteur"   id="auteur"><?= $event['Author']; ?></div>
                                <input type='hidden' name="id_evenement" Value="<?= $event['ID']; ?>"/>
                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2" >
                        <button type="submit" >Voir les informations sur cet évènement</button>
                    </div>
                </div>
            </section>

<?php
            }
            ?>
            <div class="col-sm-2">
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
