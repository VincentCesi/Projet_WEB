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
        <title>Voir les reports</title>
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
                    $(".bar8").addClass("active");
                </script>
            </div>




            <section class="col-sm-8">
                <?php
                include('connexiondb.php');
                $requeteReport = $bdd->query('SELECT * FROM reportation ORDER BY ID_Report');
                while ($report = $requeteReport->fetch())
                {
                    $requeteUser = $bdd->prepare('SELECT Email FROM users WHERE ID_User = :report');
                    $requeteUser ->execute(array(':report'=> $report['ID_User']));
                    $reportUser = $requeteUser->fetch();
                ?>
                <div class="table_event row">
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-12">
                                <form method="post" action="testDeleteReport.php" >

                                    <div class="Titre"  id="auteur"><?= $reportUser['Email']; ?></div>
                                    <br>
                                    <div class="Description"  id="report"><?= $report['Description']; ?></div>
                                    <br>
                                    <input type='hidden' name="id_report" id="id_report" value="<?= $report['ID_Report']; ?>"/>
                                    <button type="submit" name="report" value="report">Supprimer la demande</button>
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
