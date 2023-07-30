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

<section class="defalt-container-style text-white mt-5" style="text-align:center;">
    <h1>About Models</h1>
</section>
<section class="defalt-container-style text-white">
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button style="background-color: var(--color-border-default);" class="accordion-button text-white"
                    type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                    aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Ferrari
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <strong>Ferrari: </strong>Ferrari is an illustrious Italian
                    luxury sports car manufacturer with a storied racing heritage. Their iconic prancing horse logo
                    represents exclusivity, speed, and elegance. Known for crafting high-performance vehicles, Ferraris
                    feature cutting-edge technology, sleek designs, and a passionate following of enthusiasts worldwide.
                </div>
            </div>
        </div>
        <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed text-white"
                    style="background-color: var(--color-border-default);" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    Lamborghini
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <strong>Lamborghini: </strong> Lamborghini, the celebrated Italian
                    automaker, is synonymous with extravagant supercars that push the boundaries of design and
                    performance. Their striking aesthetics, powerful engines, and aerodynamic prowess make Lamborghinis
                    a dream for automotive enthusiasts seeking the ultimate driving experience.

                </div>
            </div>
        </div>
        <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button style="background-color: var(--color-border-default);"
                    class="text-white accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                    Bugatti
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <strong>Bugatti: </strong> Bugatti, the prestigious French
                    marque, stands at the forefront of automotive engineering and luxury. Their hypercars are a perfect
                    fusion of speed, craftsmanship, and exclusivity. Bugatti's track record of producing some of the
                    fastest, most sought-after vehicles showcases their commitment to pushing the limits of what's
                    possible.

                </div>
            </div>
        </div>
        <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="panelsStayOpen-heading4">
                <button style="background-color: var(--color-border-default);"
                    class="text-white accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapse4">
                    Porsche
                </button>
            </h2>
            <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-heading4">
                <div class="accordion-body">
                    <strong>Porsche: </strong> Porsche, the German sports car
                    brand, is revered for its timeless designs and precision engineering. From iconic models like the
                    911 to versatile SUVs like the Cayenne, Porsches offer a balance of performance and everyday
                    usability. Porsche's racing heritage and innovative technology continue to captivate enthusiasts
                    worldwide.
                </div>
            </div>
        </div>
        <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="panelsStayOpen-heading5">
                <button style="background-color: var(--color-border-default);"
                    class="text-white accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapse5">
                    McLaren
                </button>
            </h2>
            <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-heading5">
                <div class="accordion-body">
                    <strong>McLaren: </strong> McLaren, the British manufacturer, focuses on high-performance sports
                    cars and supercars that excel on the track and the road. Embracing cutting-edge materials and
                    aerodynamics, McLaren's vehicles deliver speed, agility, and refined craftsmanship, making them a
                    top choice for driving enthusiasts.
                </div>
            </div>
        </div>
        <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="panelsStayOpen-heading6">
                <button style="background-color: var(--color-border-default);"
                    class="text-white accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapse6" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapse6">
                    Aston Martin
                </button>
            </h2>
            <div id="panelsStayOpen-collapse6" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-heading6">
                <div class="accordion-body">
                    <strong>Aston Martin: </strong> Aston Martin, a distinguished British luxury carmaker, exudes
                    elegance and sophistication. Often associated with James Bond, Aston Martin's handcrafted vehicles
                    blend timeless design with powerful performance. Driving an Aston Martin symbolizes a sense of style
                    and refinement, catering to those who appreciate a touch of exclusivity.


                </div>
            </div>
        </div>
        <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="panelsStayOpen-heading7">
                <button style="background-color: var(--color-border-default);"
                    class="text-white accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapse7" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapse7">
                    Koenigsegg
                </button>
            </h2>
            <div id="panelsStayOpen-collapse7" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-heading7">
                <div class="accordion-body">
                    <strong>Koenigsegg: </strong> Koenigsegg: Koenigsegg, the Swedish hypercar manufacturer, is renowned
                    for pushing boundaries in performance and innovation. Their limited-production vehicles boast
                    record-breaking speed and cutting-edge technologies. Koenigsegg's hypercars are the epitome of
                    automotive engineering excellence and cater to those seeking the extraordinary.

                </div>
            </div>
        </div>
        <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="panelsStayOpen-heading8">
                <button style="background-color: var(--color-border-default);"
                    class="text-white accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapse8" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapse8">
                    Pagani
                </button>
            </h2>
            <div id="panelsStayOpen-collapse8" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-heading8">
                <div class="accordion-body">
                    <strong>Pagani: </strong> Pagani: Pagani, the Italian hypercar company, creates automotive
                    masterpieces that blend artistry and engineering. Hand-built and limited in production, Pagani's
                    hypercars are unique and exclusive. Meticulous attention to detail, top-notch materials, and
                    breathtaking designs define Pagani's commitment to delivering an unparalleled driving experience.


                </div>
            </div>
        </div>
        <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="panelsStayOpen-heading9">
                <button style="background-color: var(--color-border-default);"
                    class="text-white accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapse9" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapse9">
                    Rolls-Royce
                </button>
            </h2>
            <div id="panelsStayOpen-collapse9" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-heading9">
                <div class="accordion-body">
                    <strong>Rolls-Royce: </strong> Rolls-Royce: Rolls-Royce, the epitome of luxury and craftsmanship,
                    represents the pinnacle of automotive excellence. Handcrafted with meticulous attention to detail,
                    Rolls-Royce cars are symbols of opulence and exclusivity. The brand's commitment to providing the
                    utmost in comfort and prestige makes each Rolls-Royce a bespoke masterpiece.

                </div>
            </div>
        </div>
        <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="panelsStayOpen-heading10">
                <button style="background-color: var(--color-border-default);"
                    class="text-white accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapse10" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapse10">
                    Bentley
                </button>
            </h2>
            <div id="panelsStayOpen-collapse10" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-heading10">
                <div class="accordion-body">
                    <strong>Bentley: </strong> Bentley: Bentley, the British luxury carmaker, exemplifies opulence and
                    grand touring prowess. Their vehicles are crafted with meticulous attention to detail and showcase
                    premium materials and cutting-edge technology. Bentley's reputation for comfort, refinement, and
                    performance makes them a symbol of prestige and sophistication.


                </div>
            </div>
        </div>
    </div>
</section>


<?php
include_once "./site-parts/footer.php";
?>