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
                        <h3>Titre</h3>
                    </div>

                    <div class="col-sm-12">
                        <form action="" method="">
                                Titre_text
                        </form>

                    </div>

                    <div class="col-sm-12">
                        Description
                    </div>

                    <div class="col-sm-12">
                        <form action="" method="">
                        Description_txt
                        </form>
                    </div>

                    <div class="col-sm-12">
                        Auteur
                    </div>

                    <div class="col-sm-12">
                        <form action="" method="">
                        Auteur_txt
                        </form>
                    </div>

                    <div class="col-sm-12">
                        Date
                    </div>

                    <div class="col-sm-12">
                        <form action="" method="">
                        Date_txt
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
