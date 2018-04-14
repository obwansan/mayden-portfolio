<?php

require_once 'cms/profileFunctions.php';

$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio-kevin', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <!--  Meta-data  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  CSS  -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!--  Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.css">
    <!--  Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <!--  JS  -->
    <script type="text/javascript" src="js/animations.js" defer></script>
</head>
<body class="profile-BG">
    <div class="container">
        <h1>Profile</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <img class="profile-image" src="images/profile-photo.png">
            </div>

            <div class="col-xs-12 col-sm-8">
                <p>
                    <?php echo $profileTextString; ?>
                </p>
                <p class="contact">Email:
                    <?php echo $emailString ?>
                </p>
            </div>

        <div class="icons">
            <a href="index.php"><img class="page-link" src="images/project-icons/home-icon-1.png"></a>
            <a href="portfolio.php"><img class="page-link" src="images/project-icons/portfolio-icon-1.png"></a>
        </div>
        <div>
            <a href="cms/login.php"><img src="images/project-icons/padlock.png" class="loginBtn"></a>
        </div>
    </div>
</body>
</html>