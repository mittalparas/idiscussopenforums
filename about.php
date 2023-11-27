<?php
require 'partials/_dbconnect.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iDiscuss - about</title>
     <link rel="icon" href="images/logo.jpg" type="image/x-icon">
  <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <!-- Navbar is in the header -->
    <?php require 'partials/_header.php' ?>
    <div class="container" style="min-height: 800px">
        <div class="container-fluid py-5">
            <h2 class="fw-bold">Made with <img src="images/heart.jpeg" height="64px" width="64px"> <span class="text-danger">Love</span> by <span class="text-success">Paras Mittal</span></h2>
            <h2 class="text-center my-5" style="font-family: Roboto"><i>Special thanks to</i></h2>
            <div class="p-5 mb-4 bg-body-tertiary rounded-3 bg-danger-subtle">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">code with harry</h1>
                    <p class="col-md-8 fs-4">Best free and online learning platform for programmers.</p>
                    <a href="https://www.youtube.com/playlist?list=PLu0W_9lII9aikXkRE0WxDt1vozo3hnmtR" target="_blank"><button class="btn btn-danger btn-lg" type="button"><img src="images/youtubeIcon.jpeg" height="20px" width="40px"> YouTube</button></a>
                    </div>
            </div>
            <h2 class="text-center my-5" style="font-family: Roboto"><i>AND</i></h2>
            <div class="p-5 mb-4 bg-body-tertiary rounded-3 bg-success-subtle">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Bootstrap</h1>
                    <p class="col-md-8 fs-4">Free and open-source CSS framework. Contains HTML, CSS and JAVASCRIPT.</p>
                    <a href="https://www.youtube.com/playlist?list=PLu0W_9lII9aikXkRE0WxDt1vozo3hnmtR" target="_blank"><button class="btn btn-success btn-lg" type="button"><img src="images/bootstrap-social-logo.png" height="30px" width="30px"> Bootstrap</button></a>
                </div>
            </div>
        </div>
    </div>