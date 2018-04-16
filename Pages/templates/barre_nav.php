
            <div class="nav">

                <ul>
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="page_evenement_ok.php">Evènements</a></li>
                <li><a href="page_evenement.php">Boîte à idée</a></li>
                <li><a href="#association">Associations</a></li>
                <li><a href="#bde">BDE</a></li>
                <li><a href="#galerie">Galerie</a></li>

            </ul>

<script >
    $(".nav li").on("click", function() {
        $(".nav li").removeClass("active");
        $(this).addClass("active");
    });
</script>

            </div>
