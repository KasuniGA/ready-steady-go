<?php
function get_orders($conn)
{
    $username = $_SESSION["username"];
    $userId = $_SESSION["userId"];

    $sql = "SELECT * FROM `orders` WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return $result;
    } else {
        return false;
    }
}