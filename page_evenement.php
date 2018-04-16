
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
        <div id="onglet">
            <?php
                include("Pages/templates/barre_nav.php");
            ?>

            <div>
            <div class="pass-carou">
                <h3>allouibonjouretlkzbneknjb fg brb jb rbngrzbznztrnbrt"irtfbvbvhfbvbvzovrijvnnv   rfvv</h3>

                <?php
                    include("Pages/templates/carousel.php");

                ?>

            </div>

            <h1>Aoernbzbdjflùbznbrznù nrtùn rboinrnbnblnblnbndmbnnbjnsbndfa vjùe</h1>
            </div>
            <div>
                <ul>
                    <li><a href="soumissionEvenement.php">Proposer un évènement</a></li>
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
