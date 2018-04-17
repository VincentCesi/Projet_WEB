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

            <section class="table_event col-sm-10">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="liste_event col-sm-12">
                                <form action="" method="">
                                Titre
                                <br>
                                Description
                                <br>
                                Auteur
                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <button onclick="location.href = 'page_evenement_ok.php'">Voir les informations sur cet évènement</button>
                    </div>
                </div>
            </section>
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
