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
            <div class="row">
                <div class="col-sm-2">
                    <?php
                    include("Pages/templates/barre_nav.php");
                    ?>
                    <script>
                        $(".bar5").addClass("active");
                    </script>
                </div>


                <div class="col-sm-8">
                    umque ibi diu moratur commeatus opperiens, quorum translationem ex Aquitania verni imbres solito crebriores prohibebant auctique torrentes, Herculanus advenit protector domesticus, Hermogenis ex magistro equitum filius, apud Constantinopolim, ut supra rettulimus, populari quondam turbela discerpti. quo verissime referente quae Gallus egerat, damnis super praeteritis maerens et futurorum timore suspensus angorem animi quam diu potuit emendabat.
                </div>

                <div class="col-sm-2">
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
