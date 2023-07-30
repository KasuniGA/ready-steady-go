<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/colors.css">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/signup.css">
</head>

<body>

    <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">
                    <img src="./resources/logo/logo-pic.png" alt="" width="100" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about-us.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./new-post.php">New post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./social.php">Social</a>
                        </li>
                    </ul>
                    <div class=""
                        style="display: flex; justify-content: center; align-items: center; padding:0; width:300px">
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo '
                            <form style="background-color:rgba(0,0,0,0); padding:0; margin: 0 5px;" class="btn form-control btn-sm" name="profile" action="./profile.php">
                            <button onclick="window.location.href=`./profile.php`;" class="btn form-control btn-warning mr-sm-0 my-2 my-sm-0 btn-sm"><b>Profile</b></button></form>
                            <button type="button" class="btn form-control btn-outline-light my-2 my-sm-0 btn-sm ml-lg-3"
                            onclick="window.location.href=`./includes/logout.inc.php`;"> <b>Log Out</b></button>';
                        } else {
                            echo '
                            <button style="margin: 0 5px;" type="button"
                                class="btn form-control btn-warning mr-sm-0 my-2 my-sm-0 btn-sm"
                                onclick="window.location.href=`./signup.php`;"><b>Signup</b></button>
                            <button type="button" class="btn form-control btn-outline-light my-2 my-sm-0 btn-sm ml-lg-3"
                                onclick="window.location.href=`./login.php`;"><b>Log In</b></button>';
                        }

                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </section>