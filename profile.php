<?php
include_once "./site-parts/header.php";

if (!isset($_SESSION["username"])) {
    header('Location: ./index.php');
    exit();
}
?>
<?php
if (isset($_GET["msg"])) {
    $msg;
    $link;
    if ($_GET["msg"] == "userUpdated") {
        $msg = "User Updated successfully ";
        $link = "./social.php";
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
                <strong>User Updated! </strong>
                <?php echo $msg; ?>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php }
?>
<section class="defalt-container-style"
    style="position:relative;background: url('./resources/img/1.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover; padding: 0;">
    <div style="width:100%; height:100%; background-color: rgba(0, 0, 0, 0.4);">
        <div class="text-white rounded" style="padding: 100px 50px">
            <h1 style="color:white;">Change your user details</h1>
            <p>Get ready to burn the tires...</p>
        </div>
    </div>
</section>


<section class="defalt-container-style">
    <h3 class="text-white mb-0" style="text-align:center;">Your Details</h3>
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
            <button name="edit_user" style="width: 100%;" class="btn btn-warning col-md-12 btn-sm"
                type="submit"><b>Save</b></button>
        </div>
    </form>
</section>
<?php include_once './site-parts/footer.php'; ?>