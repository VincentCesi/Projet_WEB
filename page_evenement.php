
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
            </div>

            <section class="col-sm-8">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <h3 class="col-sm-6">allouibonjouretlkzbneknjb fg brb jb rbngrzbznztrnbrt"irtfbvbvhfbvbvzovrijvnnv   rfvv</h3>
                            <div class="col-sm-6">
                                <?php
                                    include("Pages/templates/carousel.php");
                                ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <h1>Aoernbzbdjflùbznbrznù nrtùn rboinrnbnblnblnbndmbnnbjnsbndfa vjùe</h1>
                        </div>
                    </div>
                </div>
            </section>

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
