<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

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
        <div id="onglet" class="col-md-12">

            <div class="col-lg-2">
            <?php
                include("Pages/templates/barre_nav.php");
            ?>
                <script>
                    $(".bar1").addClass("active");
                </script>
            </div>


            <div class="txt_carousel col-lg-8">
                <div class="txt">
                    <?php
                        print ("df;:nhmkdjhbdkbjsfbnomdqbjk nek n dkdk  vkeùJB%PKVNWDVN?VXC. X  SDNVJL SNVSVNSKJVSDKVNS.V XSD SVSDVNSDKJVSV vNDSDV SDVDVMDSVNKJDV NKFDVSDVDBBDF B KJBW BJBJKDB DKJV EIEROBIERBI  SF IVDJBVKB KD KD VBVBSV BVSDBKDSVN VHDUZHDidfbvdvb ,ngbifbbdjd v  svbvjd dfvdfvbdvbd vvbbfdbdffvbdkj vbdvbjv cnxvjhdfbvjhdbv dfvdvbjhvbjebzj vvbjhbfhjsd vdsv hs vs vsvjsvjsb jesjhsb vjvj vhsvfghsev sjvesvsjhv");

                    ?>
                </div>

                <?php

                    include("Pages/templates/carousel.php");

                ?>
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

