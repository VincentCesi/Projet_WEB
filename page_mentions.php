<?php
include("Pages/templates/bootstrap.php");
?>

<!DOCTYPE htlm>
<html>

    <head>
        <meta charset="utf=8" />
        <title>Mentions légales</title>
        <?php

        session_start();

        include("Pages/templates/head_bde.php");
        ?>

    </head>


    <body>
        <div id="onglet" class="col-md-12">

            <div class="col-lg-3">
                <?php
                include("Pages/templates/barre_nav.php");
                ?>

            </div>

            <div class="col-lg-6">
                <h1 class="mention_titre">Mentions légales</h1>
                <h5 class="mention_titre">En vigueur au 18/04/2018</h5>
                <br>
                <article class="mention_txt">
                    Conformément aux dispositions des Articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la Confiance dans l'économie numérique, dite L.C.E.N., il est porté à la connaissance des Utilisateurs du site BDE Exia Pau les présentes mentions légales.
                    <br>
                    <br>
                    La connexion et la navigation sur le site BDE Exia Pau par l'Utilisateur implique acceptation intégrale et sans réserve des présentes mentions légales.
                    <br>
                    Ces dernières sont accessibles sur le site à la rubrique « Mentions légales ».
                </article>
                <br>
                <h3 class="mention_titre">ARTICLE 1 : L'EDITEUR</h3>
                <article class="mention_txt">
                    L'édition du site BDE Exia Pau est assurée par Barachet Antoine, Bertin Vincent, Guerci Jean et Marco Dorian, dont l'adresse e-mail est team@presq.élu
                </article>
                <br>
                <br>
                <h3 class="mention_titre">ARTICLE 2 : L'HEBERGEUR</h3>
                <article class="mention_txt">
                    L'hébergeur du site BDE Exia Pau est la Société Kacleck Simare, dont le siège social est situé au Royaume du Père Noël, avec le numéro de téléphone : 36 30 36 30
                </article>
                <br>
                <br>
                <h3 class="mention_titre">ARTICLE 3 : ACCES AU SITE</h3>
                <article class="mention_txt">
                    Le site est accessible seulement pour les utilisateurs, 7j/7, 24h/24 sauf cas de force majeure, interruption programmée ou non et pouvant découlant d'une nécessité de maintenance.
                </article>
                <br>
            </div>

            <div class="col-lg-3">
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
