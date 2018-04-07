<?php

require_once 'profileFunctions.php';

$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio-kevin', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="profile.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Profile</h1>
        <div class="col-4">
            <img class="profile-image" src="images/profile-photo.png">
        </div>
        <div class="col-8">
            <p>
                <?php
                $textArray = getProfileText($db);
                echo outputProfileText($textArray);
                ?>
            </p>
            <p class="contact">Email:
                <?php
                $emailArray = getEmail($db);
                echo outputEmail($emailArray);
                ?>
            </p>
        </div>
        <div class="icons">
            <a href="index.php"><img class="page-link" src="images/project-icons/home-icon-1.png"></a>
            <a href="portfolio.php"><img class="page-link" src="images/project-icons/portfolio-icon-1.png"></a>
        </div>
        <div>
            <a href="login.php"><img src="images/padlock.png" class="loginBtn"></a>
        </div>
    </div>
</body>
</html>