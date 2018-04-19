<?php
include("Pages/templates/bootstrap.php");
?>

<!DOCTYPE htlm>
<html>


    <?php
    session_start();



    ?>
    <head>
        <meta charset="utf=8" />
        <title>BDE</title>
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
                    $(".bar9").addClass("active");
                </script>
            </div>


            <div class="col-sm-8">
                <h3>Report</h3>

                <form action="testReport.php" method="post">

                    <p>
                        <label for="report">Expliquez ici votre problème.</label><br />
                        <textarea rows="6" cols="90" maxlength="500" name="report" required></textarea>
                        <input type="submit" value="Envoyer" />
                    </p>

                </form>
            </div>

            <div class="col-lg-2">
                <?php
                if (isset($_SESSION['id'])) {

                    if ($_SESSION['id'] != 0) {
                        echo "Bienvenue " . $_SESSION['email'];

                        include("Pages/templates/barre_deco.php");
                    }
                }else {
                    include("Pages/templates/barre_coins.php");
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
