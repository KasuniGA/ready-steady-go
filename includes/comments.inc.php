<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: ../index.php?err=pleaseLogin");
    exit();
}


require_once './db.inc.php';
require_once './social.inc.php';

if (isset($_POST["comment_submit"])) {
    // comment($conn, $userId, $postId, $username, $comment)
    $result = comment($conn, $_SESSION["userId"], $_POST["postId"], $_SESSION["username"], $_POST["comment"]);
    if (!$result) {
        header("Location: ../social.php?err=ServerError");
        exit();
    }
    if ($result) {
        header("Location: ../social.php?msg=commentSuccess");
        exit();
    }
}
if (isset($_POST["comment_delete"])) {
    $result = delete_comment($conn, $_POST["postId"], $_POST["commentId"], $_SESSION["userId"]);
    if (!$result) {
        header("Location: ../social.php?err=ServerError");
        exit();
    }
    if ($result) {
        header("Location: ../social.php?msg=commentDeleteSuccess");
        exit();
    }

}