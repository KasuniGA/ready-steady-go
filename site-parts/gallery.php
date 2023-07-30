<section class="defalt-container-style">
    <div class="lightbox row">

        <?php
        require_once "./includes/db.inc.php";
        require_once "./includes/social.inc.php";

        $results = get_public_posts($conn);
        if ($results) {
            $rows = array();
            while ($row = mysqli_fetch_assoc($results)) {
                $rows[] = $row;
            }

            $reversedRows = array_reverse($rows);

            $count = 0;
            foreach ($reversedRows as $row) {
                if ($count > 10) {
                    break;
                }
                ?>
                <div class="col-lg-6">
                    <img src="<?php echo $row["postImg"] ?>" data-mdb-img="<?php echo $row["postImg"] ?>" alt=""
                        class="w-100 mb-2 mb-md-4 shadow-1-strong" />
                </div>
                <?php
            }
        } else {

        }
        ?>
    </div>
</section>