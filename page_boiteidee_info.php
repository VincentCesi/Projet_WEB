<?php

if(isset($_POST['information'])){
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
        <title>Info idée</title>

        <?php
    include("Pages/templates/head_bde.php");
        ?>
    </head>


    <body>
        <?php

    $idEvent = $_POST['id_evenement'];
    include('connexiondb.php');
    $requeteEvent = $bdd->prepare("SELECT * FROM ideabox WHERE ID_Idea = ?");
    $requeteEvent->execute(array($idEvent));
    $event = $requeteEvent->fetch();
        ?>
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
                        <form  >
                            <div class="col-sm-12">
                                <h3><div class="Titre"  id="titre"><?= $event['Title']; ?></div></h3>
                            </div>
                            <br>
                            <div class="Description"  id="description"><?= $event['Description']; ?></div>
                            <br>
                            <div class="Auteur"   id="auteur">Auteur: <?= $event['Author']; ?></div>
                            <button type="submit" name="archive" value="archive">Mettre en archive</button>
                        </form>

                    </div>





                </div>
            </section>

            <div class="col-sm-2">
                <form class="go_event" action="likeIdee.php" method="post">
                    <input type='hidden' name="id_evenement_like" Value="<?= $_POST['id_evenement']; ?>"/>
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
}elseif(isset($_POST['archive'])){
    include('connexiondb.php');
    $idEvent = $_POST['id_evenement'];
    $requeteEventDelete = $bdd->prepare("UPDATE ideabox SET Validation = 1 WHERE ID_Idea = ?");
    $requeteEventDelete->execute(array($idEvent));

    header("Location: page_boiteidee.php");

}
?>
