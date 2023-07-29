<?php

function getProducts($conn)
{

    $sql = 'SELECT * FROM `products`';
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return $result;
    } else {
        return false;
    }
}