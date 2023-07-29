<?php
session_start();
if (!isset($_POST["posts"]) || !isset($_SESSION["username"])) {
    header('Location: ../index.php');
    exit();
}
if (!isset($_POST["postVisibility"])) {
    header('Location: ../new-post.php?err=SelectionError');
    exit();
}
if (!isset($_POST["postCaption"])) {
    header('Location: ../new-post.php?err=CaptionError');
    exit();
}
if (!isset($_POST["postImg"])) {
    header('Location: ../new-post.php?err=URLError');
    exit();
}
function create_post($conn, $postCaption, $postImg, $postVisibility)
{
    $userId = $_SESSION["userId"];
    // $username = $_SESSION["username"];
    $date = date('Y-m-d');

    $sql = "INSERT INTO posts (userId, postCaption, postImg, postVisibility, postDate) VALUES ('$userId','$postCaption','$postImg','$postVisibility', '$date');";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        header("Location: ../index.php?err=Server error. Contact the developers");
    }
}

require_once "./db.inc.php";
create_post($conn, $_POST["postCaption"], $_POST["postImg"], $_POST["postVisibility"]);
header('Location: ../index.php');