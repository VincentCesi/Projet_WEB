
<<<<<<< HEAD
=======

>>>>>>> origin/master
<div class="nav">

    <ul>

        <li class="bar1"><a href="index.php">Accueil</a></li>
        <?php
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 1) { ?>
        <li class="bar2"><a href="page_evenement.php">Evènements</a></li>
        <li class="bar3"><a href="page_boiteidee.php">Boîte à idée</a></li>
        <?php
            }}?>
        <li class="bar4"><a href="page_association.php">Associations</a></li>
        <li class="bar5"><a href="page_bde.php">BDE</a></li>

<<<<<<< HEAD
        <?php
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 1) { ?>
        <li class="bar6"><a href="page_galerie.php">Galerie</a></li>
        <?php
            }}?>
        <li class="bar6"><a href="page_galerie.php">Galerie</a></li>

        <?php
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] == 3) { ?>
        <li><a href="formereport.php">Signaler</a></li>
=======
        <li class="bar6"><a href="page_galerie.php">Galerie</a></li>

        <?php
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] == 3) { ?>
        <li><a href="formereport.php">Signaler</a></li>
        <?php
            }}?>

        <?php
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] == 4) { ?>



        <li class="bar7"><a href="archive.php">Voir archive boite idée</a></li>
        <?php
                include ('connexiondb.php');
                $requeteReport = $bdd->query('SELECT * FROM reportation ORDER BY ID_Report');
                if ($report = $requeteReport->fetch()){ ?>

        <li class="bar8"><a href="reportview.php">Voir les reports /!\</a></li>
        <?php }else{ ?>
        <li class="bar8"><a href="reportview.php">Voir les reports</a></li>
        <?php }?>
>>>>>>> origin/master
        <?php
            }}?>
    </ul>
</div>
