<?php
include_once "./site-parts/header.php";
?>
<section class="signup-content ">
    <div class="signup-left">
        <img src="./resources/img/2.jpg" alt="" style="height: 100%; width: auto; opacity: 0.6;">
    </div>
    <div class="signup-right text-white">
        <section class="light-container-style ">
            <h3 style="text-align: center; margin: 0;">Log In</h3>
        </section>
        <div class="light-container-style signup-box">

            <form class="row g-1 text-white">
                <div class="col-md-12 input-group-sm">
                    <label for="validationDefault01" class="form-label">Username / Email</label>
                    <input type="text" class="form-control defalt-input-style text-white" id="validationDefault01"
                        placeholder="Username / Email" required>
                </div>
                <div class="col-md-12 input-group-sm">
                    <label for="validationDefault02" class="form-label">Password</label>
                    <input type="text" class="form-control defalt-input-style text-white" id="validationDefault02"
                        placeholder="Password" required>
                </div>
                <div class="col-12 mt-4">
                    <button style="width: 100%;" class="btn btn-warning col-md-12 btn-sm" type="submit"><b>Log
                            In</b></button>
                </div>
            </form>
        </div>
        <section class="light-container-style ">
            <p style="text-align: center; margin: 0;">Don't have an account? <a href="./signup.php">Sign Up</a>
            </p>
        </section>
    </div>
</section>

<?php
include_once "./site-parts/footer.php";
?>