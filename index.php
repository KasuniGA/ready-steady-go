<?php
include_once "./site-parts/header.php";
?>

<section class="defalt-container-style text-white">
    <p style="margin: 0px;">hello,
        <?php
        if (isset($_SESSION["username"])) {
            echo $_SESSION["username"];
        } else {
            echo "User";
        }
        ?>
    </p>
</section>

<?php
include_once "./site-parts/footer.php";
?>