<?php
function get_public_posts($conn)
{

    $sql = "SELECT * FROM `posts` WHERE postVisibility = 1;";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return $result;
    } else {
        return false;
    }
}
function get_private_posts($conn)
{
    $username = $_SESSION["username"];
    $userId = $_SESSION["userId"];

    $sql = "SELECT * FROM `posts` WHERE postVisibility = 0 AND userId = $userId;";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return $result;
    } else {
        return false;
    }
}

function get_user($conn, $userId)
{
    $sql = "SELECT * FROM `users` WHERE userId = $userId;";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $result = mysqli_fetch_assoc($result);
        return $result;
    } else {
        return false;
    }
}

function get_likes_count($conn, $postId)
{
    $sql = "SELECT COUNT(*) AS likesCount FROM `likes` WHERE postId = $postId;";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $result = mysqli_fetch_assoc($result);
        return $result;
    } else {
        return false;
    }
}
function get_comments_count($conn, $postId)
{
    $sql = "SELECT COUNT(*) AS commentsCount FROM `comments` WHERE postId = $postId;";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $result = mysqli_fetch_assoc($result);
        return $result;
    } else {
        return false;
    }
}

function get_comments($conn, $postId)
{
    $sql = "SELECT * FROM `comments` WHERE postId = $postId;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    } else {
        return false;
    }
}

function is_user_liked($conn, $userId, $postId)
{
    $sql = "SELECT likeId FROM `likes` WHERE postId = $postId AND userId = $userId;";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $result = mysqli_fetch_assoc($result);
        if ($result) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function comment($conn, $userId, $postId, $username, $comment)
{
    $date = date('Y-m-d');

    $sql = "INSERT INTO comments (userId, postId, commentDate, username, comment) VALUES ('$userId','$postId','$date','$username', '$comment');";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

function like($conn, $postId, $userId)
{
    $sql = "INSERT INTO `likes` (userId, postId) VALUES ('$userId','$postId');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return $result;
    } else {
        return false;
    }
}

function unlike($conn, $postId, $userId)
{
    // DELETE FROM likes WHERE `likes`.`likeId` = 2"
    $sql = "DELETE FROM `likes` WHERE `likes`.`userId` = $userId AND `likes`.`postId` = $postId;";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

function delete_comment($conn, $postId, $commentId, $userId)
{
    $sql = "DELETE FROM `comments` WHERE `comments`.`postId` = $postId AND `comments`.`commentId` = $commentId;";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}