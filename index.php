<?php
include_once "./site-parts/header.php";
// <!-- Alert -->
?>
<?php
if (isset($_GET["msg"])) {
    $msg;
    $link;
    if ($_GET["msg"] == "shareComplete1") {
        $msg = "your post is shared publicly :) ";
        $link = "./social.php";
    }
    if ($_GET["msg"] == "shareComplete0") {
        $msg = "your post is shared privately :) ";
        $link = "./private.php";
    }

    ?>
    <div class="alert alert-success alert-dismissible fade show" style="padding:0; display:flex; justify-content:center;"
        role="alert">

        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </symbol>
        </svg>
        <div class="alert alert-success d-flex align-items-center" style="margin:0;" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div style="width: 100%;">
                <strong>Post shared! </strong>
                <?php echo $msg; ?><a href="<?php echo $link; ?>">See</a>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php }
?>
<?php
if (isset($_GET["err"])) {
    $msg;
    $link;
    if ($_GET["err"] == "pleaseLogin") {
        $msg = "Please Login or signup to see all.  ";
        $link = "./social.php";
    }
    // if ($_GET["err"] == "shareComplete0") {
    //     $msg = "your post is shared privately :) ";
    //     $link = "./private.php";
    // }

    ?>
    <div class="alert alert-warning alert-dismissible fade show" style="padding:0; display:flex; justify-content:center;"
        role="alert">

        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </symbol>
        </svg>
        <div class="alert alert-warning d-flex align-items-center" style="margin:0;" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <div style="width: 100%;">
                <strong>Signup or Login! </strong>
                <?php echo $msg; ?><a href="./login.php">Login</a>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php }
?>
<section class="defalt-container-style"
    style="position:relative;background: url('./resources/img/5.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover; padding: 0;">
    <div style="width:100%; height:100%; background-color: rgba(0, 0, 0, 0.4);">
        <div class="text-white rounded" style="padding: 100px 50px">
            <h1 style="color:white;">Hello,
                <?php
                if (isset($_SESSION["username"])) {
                    echo ($_SESSION["firstName"] . " " . $_SESSION["lastName"]);
                } else {
                    echo "User";
                }
                ?>
            </h1>
            <p>Social area is the best place to see the recent events...</p>
            <a href="./social.php" class="btn btn-warning mt-5" style="width: 120px"><b>Go Social</b></a>
        </div>
    </div>
</section>

<?php include_once "./site-parts/gallery.php"; ?>

<section class="defalt-container-style text-white mt-5" style="text-align:center;">
    <h1>Brands</h1>
</section>
<section class="defalt-container-style text-white">
    <table class="table-sec">
        <tr>
            <th class="table-div image-container">
                <img class="brand-img" src="./resources/logo/ferrari.jpg" alt="" width="100%">
            </th>
            <th class="table-div text-table-div">
                <h5>Ferrari</h5>
            </th>
        </tr>
        <tr>
            <th class="table-div text-table-div">
                <h6>Lamborghini</h6>
            </th>
            <th class="table-div image-container">
                <img class="brand-img" src="./resources/logo/lambo.jpg" alt="" width="100%">
            </th>
        </tr>
        <tr>
            <th class="table-div image-container">
                <img class="brand-img" src="./resources/logo/Bugatti.jpg" alt="" width="100%">
            </th>
            <th class="table-div text-table-div">
                <h6>Bugatti</h6>
            </th>
        </tr>
        <tr>
            <th class="table-div text-table-div">
                <h6>Porsche</h6>
            </th>
            <th class="table-div image-container">
                <img class="brand-img" src="./resources/logo/porsche.jpg" alt="" width="100%">
            </th>
        </tr>
        <tr>
            <th class="table-div image-container">
                <img class="brand-img" src="./resources/logo/mclaren.jpg" alt="" width="100%">
            </th>
            <th class="table-div text-table-div">
                <h6>McLaren</h6>
            </th>
        </tr>
        <tr>
            <th class="table-div text-table-div">
                <h6>Aston Martin</h6>
            </th>
            <th class="table-div image-container">
                <img class="brand-img" src="./resources/logo/AstonMartin.jpg" alt="" width="100%">
            </th>
        </tr>
        <tr>
            <th class="table-div image-container">
                <img class="brand-img" src="./resources/logo/Koenigsegg.jpg" alt="" width="100%">
            </th>
            <th class="table-div text-table-div">
                <h6>Koenigsegg</h6>
            </th>
        </tr>
        <tr>
            <th class="table-div text-table-div">
                <h6>Pagani</h6>
            </th>
            <th class="table-div image-container">
                <img class="brand-img" src="./resources/logo/pagani.jpg" alt="" width="100%">
            </th>
        </tr>
        <tr>
            <th class="table-div image-container">
                <img class="brand-img" src="./resources/logo/Rolls-Royce.jpg" alt="" width="100%">
            </th>
            <th class="table-div text-table-div">
                <h6>Rolls-Royce</h6>
            </th>
        </tr>
        <tr>
            <th class="table-div text-table-div">
                <h6>Bentley</h6>
            </th>
            <th class="table-div image-container">
                <img class="brand-img" src="./resources/logo/Bentley.jpg" alt="" width="100%">
            </th>
        </tr>
    </table>

</section>



<?php
include_once "./site-parts/footer.php";
?>