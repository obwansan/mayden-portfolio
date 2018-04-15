<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kevin O'Brien - Portfolio</title>
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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<!--[if IE]><body class="ie"><![endif]-->

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
                        <span class="glyphicon glyphicon-folder-open" aria-label="work portfolio link"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- main -->
<body class="home-BG">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 homePageText">Where am I?</div>
            <div class="overlay">
                <div class="text">Overlay Text</div>
            </div>
        </div>
    </div>
</body>
</html>