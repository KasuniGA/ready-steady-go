<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: ../index.php?err=pleaseLogin");
    exit();
}
if (!(isset($_POST["like"]) || isset($_POST["unlike"]))) {
    header("Location: ../index.php");
}
require_once './db.inc.php';
require_once './social.inc.php';


// like($conn, $postId, $userId)
if (isset($_POST["like"])) {
    echo "likeee";
    $result = like($conn, $_POST["postId"], $_SESSION["userId"]);
    if (!$result) {
        header("Location: ../social.php?err=Server error. Contact the developers");
        exit();
    }
    if ($result) {
        header("Location: ../social.php?msg=likeSuccess");
        exit();
    }
}

if (isset($_POST["unlike"])) {
    $result = unlike($conn, $_POST["postId"], $_SESSION["userId"]);
    if (!$result) {
        header("Location: ../social.php?err=Server error. Contact the developers");
        exit();
    }
    if ($result) {
        header("Location: ../social.php?msg=unlikeSuccess");
        exit();
    }
}