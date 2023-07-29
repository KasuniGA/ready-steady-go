<?php
function get_posts($conn)
{
    $username = $_SESSION["username"];
    $userId = $_SESSION["userId"];

    $sql = "SELECT * FROM `posts` WHERE userId = '$userId';";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return $result;
    } else {
        return false;
    }
}