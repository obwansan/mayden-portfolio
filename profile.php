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
    <!--  Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.css">
    <!--  CSS  -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!--  Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Megrim|Rajdhani" rel="stylesheet">
    <!--  JS  -->
    <script type="text/javascript" src="js/animations.js" defer></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<!--[if IE]><body class="ie"><![endif]-->
<body>

<!-- nav bar -->
<nav class="navbar transparent navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.php" data-toggle="tooltip" title="home">
                        <span class="glyphicon glyphicon-home" aria-label="home page link"></span>
                    </a>
                </li>
                <li>
                    <a href="profile.php" data-toggle="tooltip" title="profile">
                        <span class="glyphicon glyphicon-user" aria-label="profile page link"></span>
                    </a>
                </li>
                <li>
                    <a href="portfolio.php" data-toggle="tooltip" title="portfolio">
                        <span class="glyphicon glyphicon-briefcase" aria-label="work portfolio link"></span>
                    </a>
                </li>
                <li>
                    <a href="portfolio.php" data-toggle="tooltip" title="contact">
                        <span class="glyphicon glyphicon-envelope" aria-label="contact link"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- main -->

    <div class="container profileContainer">

        <div class="row">

            <div class="profileTitle">Profile</div>

            <div class="profileTxt">
                <img class="profileImage" src="images/me-photo.jpg" alt="photo-of-kevin-obrien">
                <?php echo $profileTextString; ?>
            </div>

        </div>

        <div class="row">
            <div class="socMedBtnContainer">
                <img class="socMedBtn" src="images/linkedIn-logo.png">

                <img class="socMedBtn" src="images/facebook-logo.png">

                <img class="socMedBtn" src="images/twitter-logo.png">
            </div>

        </div>

    </div>

</body>
</html>