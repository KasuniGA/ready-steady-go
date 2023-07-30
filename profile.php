<?php
include_once "./site-parts/header.php";

if (!isset($_SESSION["username"])) {
    header('Location: ./index.php');
    exit();
}
?>

<section class="defalt-container-style">
    <p class="text-white mb-0">Your Details</p>
</section>
<section class="text-white light-container-style">
    <form class="row g-1 text-white" method="post" action="./includes/edit-user.inc.php">
        <div class="col-md-6 input-group-sm">
            <label for="validationDefault01" class="form-label">First name</label>
            <input value="<?php echo $_SESSION["firstName"]; ?>" type="text"
                class="form-control defalt-input-style text-white" id="validationDefault01" placeholder="First name"
                name="firstname" required>
        </div>
        <div class="col-md-6 input-group-sm">
            <label for="validationDefault02" class="form-label">Last name</label>
            <input value="<?php echo $_SESSION["lastName"]; ?>" type="text"
                class="form-control defalt-input-style text-white" id="validationDefault02" placeholder="Last name"
                name="lastname" required>
        </div>
        <div class="col-md-12 input-group-sm">
            <label for="validationDefaultUsername" class="form-label">Username</label>
            <div class="input-group">
                <span class="input-group-text defalt-input-style text-white" id="inputGroupPrepend2">@</span>
                <input disabled value="<?php echo $_SESSION["username"]; ?>" name="username" type="text"
                    class="form-control defalt-input-style text-white" id="validationDefaultUsername"
                    aria-describedby="inputGroupPrepend2" required placeholder="Username" style=" border: 2px solid var(--color-border-default);
    background-color: var(--color-background-defalt);">
            </div>
        </div>
        <div class="col-md-6 input-group-sm">
            <label for="validationDefault03" class="form-label">Email</label>
            <input value="<?php echo $_SESSION["userEmail"]; ?>" name="email" type="email"
                class="form-control defalt-input-style text-white" id="validationDefault03" required
                placeholder="Email">
        </div>
        <div class="col-md-6 input-group-sm" style="font-size: small;">
            <label for="validationDefault04" class="form-label ">Gender</label>

            <select name="gender" class="form-select-sm form-select defalt-input-style text-white"
                id="validationDefault04" required> <?php
                $value;
                $text;
                if ($_SESSION["userGender"] === "m") {
                    echo '
                    <option selected value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="o">Other</option>
                        ';
                }
                if ($_SESSION["userGender"] === "f") {
                    echo '
                    <option value="m">Male</option>
                <option selected value="f">Female</option>
                <option value="o">Other</option>
                    ';
                }
                if ($_SESSION["userGender"] === "o") {
                    echo '
                    <option value="m">Male</option>
                <option value="f">Female</option>
                <option selected value="o">Other</option>
                    ';
                }
                ?>
            </select>
        </div>
        <div class="col-12 mt-4">
            <button name="signup" style="width: 100%;" class="btn btn-warning col-md-12 btn-sm"
                type="submit"><b>Save</b></button>
        </div>
    </form>
</section>

<?php
echo '
<section class="text-white defalt-container-style">
    Hello ' . $_SESSION["firstName"] . " " . $_SESSION["lastName"] . '
, Still you cannot edit your details.</section>';
?>
<?php include_once './site-parts/footer.php'; ?>