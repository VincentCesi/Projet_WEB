
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

                    <?php
                        if (isset($_SESSION['role'])) {
                        if ($_SESSION['role'] != 1) { ?>
                            <li class="bar6"><a href="#galerie">Galerie</a></li>
                     <?php
                    }}?>

                    <?php
                        if (isset($_SESSION['role'])) {
                        if ($_SESSION['role'] == 3) { ?>
                            <li><a href="formereport.php">Signaler</a></li>
                    <?php
                    }}?>
            </ul>
            </div>
