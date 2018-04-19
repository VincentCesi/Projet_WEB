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
        <title>Info Event</title>

        <?php
        include("Pages/templates/head_bde.php");
        ?>
    </head>


    <body>

        <?php
        $idEvent = $_POST['id_evenement'];

        include('connexiondb.php');
        $requeteEvent = $bdd->prepare("SELECT * FROM eventValidated WHERE ID_EventValidated = ?");
        $requeteEvent->execute(array($idEvent));
        $event = $requeteEvent->fetch();


        ?>
        <div id="onglet" class="col-lg-12">
            <div class="row">
                <div class="col-sm-2">
                    <?php
                    include("Pages/templates/barre_nav.php");
                    ?>
                    <script>
                        $(".bar2").addClass("active");
                    </script>
                </div>

                <section class="col-sm-8">
                    <div class="row">

                        <div class="col-sm-12">
                            <form action="page_proposer_event.php" method="post">
                                <div class="col-sm-12">
                                    <h3><div class="Titre"  id="titre"><?= $event['Title']; ?></div></h3>
                                </div>

                                <br>
                                <div class="Description"  id="description"><?= $event['Description']; ?></div>
                                <br>
                                <div class="Auteur"   id="auteur">Auteur: <?= $event['Author']; ?></div>
                                <br>
                                <div class="DateStart"   id="DateStart">Début des inscriptions: <?= $event['StartDate']; ?></div>
                                <br>
                                <div class="EndStart"   id="EndStart">Fin des inscriptions: <?= $event['EndDate']; ?></div>
                            </form>

                        </div>




                    </div>
                </section>

                <div class="col-sm-2">

                    <form class="go_event" action="participationEvent.php" method="post">
                        <input type="submit" value="Participation à l'event" name="Participate" id="Participate">
                        <input type='hidden' name="id_evenement" Value="<?= $event['ID_EventValidated']; ?>"/>
                    </form>

                    <form action="likeIdee.php" method="post">
                        <input type="submit" value="J'aime" name="Like" id="Like">
                        <input type='hidden' name="id_evenement" Value="<?= $event['ID_EventValidated']; ?>"/>
                    </form>

                    <form action="script_transfert_image/Envoieimage.php" method="post">

                        <input type='hidden' name="id_evenement" Value="<?= $event['ID_EventValidated']; ?>"/>
                        <input type="submit" value="Images" name="" id="">
                    </form>


                    <form method="post" action="page_galerie.php">
                        <input type='hidden' name="id_evenement" Value="<?= $event['ID_EventValidated']; ?>"/>
                        <button type="submit" onclick="location.href = 'page_galerie.php';">Galerie</button>
                    </form>

                </div>


                <div class="col-lg-12" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form role="form" action ="envoiCommentaire.php" method="post">
                                <textarea rows="2" type="text" name="commentaire" id="commentaire" class="form-control input-sm" placeholder="Ecrivez votre commentaire" required></textarea>
                                <input type='hidden' name="id_evenement" Value="<?= $event['ID_EventValidated']; ?>"/>
                                <button type="submit" class="btn btn-primary">Envoyer</button>

                            </form>
                            <?php

                            include('connexiondb.php');
                            $idEvent = $_POST['id_evenement'];
                            $requeteComment = $bdd->prepare('SELECT * FROM comments WHERE ID_EventValidated = :idEvent ORDER BY ID_Comment DESC');
                            $requeteComment ->execute(array(':idEvent'=> $event['ID_EventValidated']));
                            while ($comment = $requeteComment->fetch())
                            {
                                $requeteCommentAuthor = $bdd->prepare('SELECT Email FROM users WHERE ID_User = :author ');
                                $requeteCommentAuthor ->execute(array(':author'=> $comment['ID_User']));
                                $requeteAuthor = $requeteCommentAuthor->fetch();
                            ?>
                            <div class="modal-header">
                                <?= $requeteAuthor['Email']; ?> écrit le <?= $comment['PostDate']; ?>
                            </div>
                            <div class="modal-body">
                                <?= $comment['Content']; ?>
                            </div>
                            <form role="form" action ="deletecom.php" method="post">

                                <?php
                                    if ($_SESSION['role'] == 4) { ?>
                                 <input type='hidden' name="id_comment" Value="<?= $comment['ID_Comment']; ?>"/>
                                <button type="submit" class="btn-danger">Supprimer</button>
                                <?php
                                    }
                                ?>
                            </form>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
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
