<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: ../index.php?err=pleaseLogin");
    exit();
}
if (!isset($_POST["comment_submit"])) {
    header("Location: ../index.php");
}
require_once './db.inc.php';
require_once './social.inc.php';


// comment($conn, $userId, $postId, $username, $comment)
$result = comment($conn, $_SESSION["userId"], $_POST["postId"], $_SESSION["username"], $_POST["comment"]);
if (!$result) {
    header("Location: ../social.php?err=Server error. Contact the developers");
    exit();
}
if ($result) {
    header("Location: ../social.php?msg=commentSuccess");
    exit();
}