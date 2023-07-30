<?php include_once './site-parts/header.php'; ?>.

<?php
if (!isset($_SESSION["username"])) {
    header("Location: ./index.php?err=pleaseLogin");
    exit();
}
require_once "./includes/social.inc.php";
require_once "./includes/db.inc.php";

$results = get_private_posts($conn);
if ($results) {
    while ($row = mysqli_fetch_assoc($results)) {
        if ($row["postVisibility"] == 0) {
            ?>

            <section class="defalt-container-style">
                <div class="post-container-style text-white" style="display: flex; align-items: center;">
                    <a href="#"></a><img src="./resources/logo/users.png" alt="" width="40px">
                    <div style="display: flex; flex-direction: column; margin-left: 20px;">
                        <?php
                        $user = get_user($conn, $row["userId"]);

                        if ($user) {
                            $user["username"];
                            $user_name = $user["firstName"] . " " . $user["lastName"];
                        }
                        ?>
                        <p style="font-size: 15px; text-align: left;">
                            <?php echo $user["username"]; ?>
                        </p>
                        <p style="font-size: 12px; text-align: left;">
                            <?php echo $user_name; ?>
                        </p>
                    </div>
                </div>
                <div class="post-container-style">
                    <img src="./resources/img/b1.jpg" class="img-fluid" alt="...">
                </div>
                <div class="post-container-style">
                    <div>
                        <div style="display:flex; width:100%">

                            <form method="post" action="./includes/likes.inc.php">
                                <input type="text" name="postId" value="<?php echo $row["postId"]; ?>" hidden>

                                <?php if (is_user_liked($conn, $_SESSION["userId"], $row["postId"])) {
                                    ?>
                                    <button name="unlike" type="submit" class="btn btn-primary btn-sm">
                                        liked <span class="badge bg-dark">
                                            <?php
                                            $likes = get_likes_count($conn, $row["postId"]);
                                            if ($likes)
                                                echo $likes["likesCount"];
                                            ?>
                                        </span>
                                    </button>
                                <?php } else { ?>

                                    <button name="like" type="submit" class="btn btn-warning btn-sm">
                                        Like <span class="badge bg-dark">
                                            <?php
                                            $likes = get_likes_count($conn, $row["postId"]);
                                            if ($likes)
                                                echo $likes["likesCount"];
                                            ?>
                                        </span>
                                    </button>
                                    <?php
                                } ?>
                            </form>

                            <button style="margin-left: 5px;" class="btn btn-secondary btn-sm" type="button"
                                data-bs-toggle="collapse" data-bs-target="#comment-<?php echo $row["postId"]; ?>"
                                aria-expanded="false" aria-controls="comment">
                                Comments <span class="badge bg-dark">
                                    <?php
                                    $comment_count = get_comments_count($conn, $row["postId"]);
                                    if ($comment_count)
                                        echo $comment_count["commentsCount"];
                                    ?>
                                </span>
                            </button>
                        </div>
                        <p class="text-white mt-2">
                            <?php echo $row["postCaption"] ?>
                        </p>
                    </div>
                    <div
                        style="width: 100%; height: 2px; background-color: var(--color-border-default); margin-top: 15px; margin-bottom: 10px;">
                    </div>
                    <div class="collapse post-container-style text-white" id="comment-<?php echo $row["postId"]; ?>"
                        style="margin:0;">
                        <div>
                            <?php
                            $comments = get_comments($conn, $row["postId"]);
                            if ($comments) {
                                while ($comment = mysqli_fetch_assoc($comments)) { ?>

                                    <div class="comment-hover">
                                        <div class="text-white" style="display:flex; justify-content: space-between;">
                                            <p><span><b>
                                                        <?php echo $comment["username"]; ?>
                                                    </b></span></p>
                                            <?php
                                            if ($comment["userId"] == $_SESSION["userId"]) {
                                                ?>
                                                <form method="post" action="./includes/comments.inc.php">
                                                    <input name="postId" value="<?php echo $row["postId"] ?>" type="text" hidden>
                                                    <input name="commentId" value="<?php echo $comment["commentId"] ?>" type="text" hidden>
                                                    <button name="comment_delete" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                        <p>
                                            <?php echo $comment["comment"]; ?>
                                        </p>
                                    </div>

                                    <?php
                                }
                            } else {
                                echo '
                            <div class="mb-4">
                                    <p class="text-white">
                                        <span><b>
                                            </b></span>
                                    <p>
                                    No comments yet
                                    </p>
                                </div>';
                            }
                            ?>
                        </div>
                        <div style="width: 100%; height: 2px; background-color: var(--color-border-default); margin-top: 15px;">
                        </div>
                    </div>
                    <form class="row text-white" method="post" action="./includes/comments.inc.php">
                        <div class="input-group-sm" style="display: flex; align-items: center; justify-content: center;">
                            <input name="postId" type="text" value="<?php echo $row["postId"]; ?>" hidden>
                            <input required name="comment" type="text" class="form-control defalt-input-style" id="inputPassword2"
                                placeholder="Your comment..." style="margin-right: 10px; color: white;">
                            <button name="comment_submit" type="submit" class="btn btn-warning btn-sm">comment</button>
                        </div>
                    </form>
                </div>
            </section>
            <?php
        }
    }
} ?>

<?php include_once './site-parts/footer.php'; ?>