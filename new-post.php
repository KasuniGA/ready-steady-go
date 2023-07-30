<?php
include_once './site-parts/header.php';
if (!isset($_SESSION["username"])) {
    header("Location: ./index.php?err=pleaseLogin");
    exit();
}
?>

<section class="defalt-container-style text-white">
    Create new post
</section>
<section class="defalt-container-style text-white">
    <form class="row g-1 text-white" method="post" action="./includes/posts.inc.php">
        <!-- Alert -->
        <?php
        if (isset($_GET["err"])) {
            $err;
            if ($_GET["err"] == "SelectionError") {
                $err = "Select the visibility";
                echo '
                        <div style="background-color: rgba(255,0,0,.2); border: 1px solid red;" class="alert alert-warning alert-dismissible fade show" role="alert">
                        <p style="margin:0;" class="text-white"><strong>Warning!</strong> ' . $err . '</p> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                ';
            } else if ($_GET["err"] == "CaptionError") {
                $err = "Give a caption for the post.";
                echo '
                        <div style="background-color: rgba(255,0,0,.2); border: 1px solid red;" class="alert alert-warning alert-dismissible fade show" role="alert">
                        <p style="margin:0;" class="text-white"><strong>Warning!</strong> ' . $err . '</p> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                ';
            } else if ($_GET["err"] == "URLError") {
                $err = "Please give an image URL";
                echo '
                        <div style="background-color: rgba(255,0,0,.2); border: 1px solid red;" class="alert alert-warning alert-dismissible fade show" role="alert">
                        <p style="margin:0;" class="text-white"><strong>Warning!</strong> ' . $err . '</p> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
            }

        }

        ?>
        <!-- Alert -->

        <div class="col-md-12 input-group-sm">
            <label for="validationDefault02" class="form-label">Caption</label>
            <input type="text" class="form-control defalt-input-style text-white" id="validationDefault02"
                placeholder="Caption" name="postCaption" required>
        </div>
        <div class="col-md-12 input-group-sm" style="font-size: small;">
            <label for="validationDefault04" class="form-label ">visibility</label>
            <select name="postVisibility" class="form-select-sm form-select defalt-input-style text-white"
                id="validationDefault04" required>
                <option selected disabled>Select visibility</option>
                <option value="0">Private</option>
                <option value="1">Public</option>
            </select>
        </div>
        <div class="col-md-12 input-group-sm">
            <label for="validationDefault01" class="form-label">Image URL</label>
            <input type="text" class="form-control defalt-input-style text-white" id="validationDefault01"
                placeholder="Image URL" name="postImg" required>
        </div>
        <div class="col-12 mt-4">
            <button name="posts" style="width: 100%;" class="btn btn-warning col-md-12 btn-sm"
                type="submit"><b>Post</b></button>
        </div>
    </form>
</section>
<?php
include_once './site-parts/header.php';
?>