<?php
include_once "./site-parts/header.php";
?>
<section class="signup-content ">
    <div class="signup-left">
        <img src="./resources/img/3.jpg" alt="" style="height: 100%; width: auto; opacity: 0.5;">
    </div>
    <div class="signup-right text-white">
        <section class="light-container-style ">
            <h3 style="text-align: center; margin: 0;">Sign Up</h3>
        </section>
        <div class="light-container-style signup-box">

            <form class="row g-1 text-white">
                <div class="col-md-6 input-group-sm">
                    <label for="validationDefault01" class="form-label">First name</label>
                    <input type="text" class="form-control defalt-input-style text-white" id="validationDefault01"
                        placeholder="First name" required>
                </div>
                <div class="col-md-6 input-group-sm">
                    <label for="validationDefault02" class="form-label">Last name</label>
                    <input type="text" class="form-control defalt-input-style text-white" id="validationDefault02"
                        placeholder="Last name" required>
                </div>
                <div class="col-md-12 input-group-sm">
                    <label for="validationDefaultUsername" class="form-label">Username</label>
                    <div class="input-group">
                        <span class="input-group-text defalt-input-style text-white" id="inputGroupPrepend2">@</span>
                        <input type="text" class="form-control defalt-input-style text-white"
                            id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required
                            placeholder="Username">
                    </div>
                </div>
                <div class="col-md-6 input-group-sm">
                    <label for="validationDefault03" class="form-label">Email</label>
                    <input type="email" class="form-control defalt-input-style text-white" id="validationDefault03"
                        required placeholder="Email">
                </div>
                <div class="col-md-6 input-group-sm" style="font-size: small;">
                    <label for="validationDefault04" class="form-label ">Gender</label>
                    <select class="form-select-sm form-select defalt-input-style text-white" id="validationDefault04"
                        required>
                        <option selected disabled value="0">Select Gender</option>
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                        <option value="o">Other</option>
                    </select>
                </div>
                <div class="col-md-6 input-group-sm">
                    <label for="validationDefault05" class="form-label">Password</label>
                    <input type="password" class="form-control defalt-input-style text-white" id="validationDefault05"
                        required placeholder="Password">
                </div>
                <div class="col-md-6 input-group-sm">
                    <label for="validationDefault06" class="form-label">Repeat Password</label>
                    <input type="password" class="form-control defalt-input-style text-white " id="validationDefault06"
                        required placeholder="Password">
                </div>
                <!-- <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div> -->
                <div class="col-12 mt-4">
                    <button style="width: 100%;" class="btn btn-warning col-md-12 btn-sm" type="submit"><b>Sign
                            Up</b></button>
                </div>
            </form>
        </div>
        <section class="light-container-style ">
            <p style="text-align: center; margin: 0;">Already have an account? <a href="./login.php">Log in</a></p>
        </section>
    </div>
</section>


<?php
include_once "./site-parts/footer.php";
?>