<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kevin O'Brien - Web Developer</title>
    <!--  Meta-data  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.css">
    <!--  CSS  -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/particles.css">
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

<!-- Particles animation -->
<!-- Inspired by: https://codepen.io/natewiley/pen/Ciwyn -->
<div id="particle-container">
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
</div>

<!-- projects -->
<div class="container">
    <div class="row titleRow">
        <div class="homeTitle">Selected Work</div>
    </div>
    <div class="row image-row">

        <!-- Mayden logo -->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 img-box-outer">
            <div class="portfolio-image mayden-logo">
                <div class="overlay">
                    <a class="portfolioText" href="https://dev.maydenacademy.co.uk/students/2018/kevin/mayden-logo/" target="_blank">Mayden logo made with HTML & CSS</a>
                </div>
            </div>
            <a href="https://github.com/obwansan/mayden-logo-challenge img-container" target="_blank" class="viewCode">&ltview code&gt</a>
        </div>

        <!-- jQuery Carousel -->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 img-box-outer">
            <div class="portfolio-image carousel">
                <div class="overlay">
                    <a class="portfolioText" href="https://dev.maydenacademy.co.uk/students/2018/kevin/jQueryCarousel/" target="_blank">jQuery sliding carousel</a>
                </div>
            </div>
            <a href="https://github.com/obwansan/timer-challenge" target="_blank" class="viewCode">&ltview code&gt</a>
        </div>

        <!-- JS Game -->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 img-box-outer">
            <div class="portfolio-image js-game">
                <div class="overlay">
                    <a class="portfolioText" target="_blank">JavaScript game - team project</a>
                </div>
            </div>
                <a href="https://github.com/Mayden-Academy/2018JSGame" target="_blank" class="viewCode">&ltview code&gt</a>
        </div>

        <!-- PHP Posts & Railings -->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 img-box-outer">
            <div class="portfolio-image posts-railings">
                <div class="overlay">
                    <a class="portfolioText" href="https://dev.maydenacademy.co.uk/students/2018/kevin/postsRailings/" target="_blank">PHP posts & railings challenge</a>
                </div>
            </div>
            <a href="https://github.com/obwansan/posts-and-railings-challenge" target="_blank" class="viewCode">&ltview code&gt</a>
        </div>

        <!-- Portfolio & CMS -->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 img-box-outer">
            <div class="portfolio-image portfolio-cms">
                <div class="overlay">
                    <div class="portfolioText">Portfolio with CMS</div>
                </div>
            </div>
            <a href="https://github.com/obwansan/mayden-portfolio/tree/story-cms-pf-v4-projectsPageLayout" target="_blank" class="viewCode">&ltview code&gt</a>
        </div>

        <!-- PHP Blackjack Game -->
<!--        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 img-box-outer">-->
<!--            <div class="portfolio-image blackjack">-->
<!--                <div class="overlay">-->
<!--                    <a class="portfolioText"   target="_blank">PHP blackjack game & tests</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <a href="https://github.com/obwansan/blackjack-game" target="_blank" class="viewCode">&ltview code&gt</a>-->
<!--        </div>-->

        <!-- Form Validation Challenge -->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 img-box-outer">
            <div class="portfolio-image form-validation">
                <div class="overlay">
                    <a class="portfolioText" href="https://dev.maydenacademy.co.uk/students/2018/kevin/formValidatorChallenge/" target="_blank">JavaScript form validation challenge</a>
                </div>
            </div>
            <a href="https://github.com/obwansan/form-validator-challenge/" target="_blank" class="viewCode">&ltview code&gt</a>
        </div>

        <!-- Pilot Shop -->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 img-box-outer">
            <div class="portfolio-image pilot-shop">
                <div class="overlay">
                    <a class="portfolioText" href="https://dev.maydenacademy.co.uk/students/2018/kevin/pilot-shop-build/" target="_blank">Clone of ecommerce template website</a>
                </div>
            </div>
            <a href="https://github.com/obwansan/pilot-shop-responsive-site" target="_blank" class="viewCode">&ltview code&gt</a>
        </div>

        <!-- JS Timer Challenge -->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 img-box-outer">
            <div class="portfolio-image js-timer">
                <div class="overlay">
                    <a class="portfolioText" href="https://dev.maydenacademy.co.uk/students/2018/kevin/timerChallenge/" target="_blank">JS DOM - Timer challenge</a>
                </div>
            </div>
            <a href="https://github.com/obwansan/timer-challenge" target="_blank" class="viewCode">&ltview code&gt</a>
        </div>

    </div>

    <div class="row">
        <div class="lock-container">
            <a href="cms/login.php" class="glyphicon glyphicon-lock" data-toggle="tooltip" title="cms"></a>
        </div>
    </div>
</div>



</body>
</html>