
<!DOCTYPE htlm>
<html>

    <head>
        <meta charset="utf=8" />
        <title>Accueil</title>

        <?php

session_start();

            include("Pages/templates/head_bde.php");




        ?>
    </head>


    <body>
        <div id="onglet">
            <?php
                include("Pages/templates/barre_nav.php");
            ?>

            <div class="txt_carousel">
                <div class="txt">
                    <?php
                        print ("Bonjour et bienvenue dans notre site !!!! oui alors je saispas ce que je fous ici donc bon voila voila coucou maman je vais bien tout va bien je ne suis pas fou je suis juste différent donc ne t'en fait pas je vais bien tout va bien.oui alors je saispas ce que je fous ici donc bon voila voila coucou maman je vais bien tout va bien je ne suis pas fou je suis juste différent donc ne t'en fait pas je vais bien tout va bien.oui alors je saispas ce que je fous ici donc bon voila voila coucou maman je vais bien tout va bien je ne suis pas fou je suis juste différent donc ne t'en fait pas je vais bien tout va bien. :D");

                    ?>
                </div>

                <?php

                    include("Pages/templates/carousel.php");

                ?>
            </div>

            <div>
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

                <div class="bde">
                    <?php
                        print ("Voici les membres principaux de le team du BDE oui alors je sais pas ce que je fous ici donc bon voila voila coucou maman je vais bien tout va bien je ne suis pas fou je suis juste différent donc ne t'en fait pas je vais bien tout va bien.")
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
