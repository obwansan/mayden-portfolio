<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="portfolio.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>
<!--[if IE]><body class="ie"><![endif]-->
<body>
    <div class="container">
        <h1>Portfolio</h1>
        <div class="gallery">
            <div class="grid-column">
                <a href="<?php echo $link[0]['link'] "><img src="<?php echo $image[0]['image'] ?>" class="portfolio-image"></a>
            </div>
            <div class="grid-column">
                <a href="#"><img class="portfolio-image" src="images/pilot-shop.png"></a>
            </div>
            <div class="grid-column">
                <a href="#"><img class="portfolio-image" src="images/project-placeholder.png"></a>
            </div>
            <div class="grid-column">
                <a href="#"><img class="portfolio-image" src="images/project-placeholder.png"></a>
            </div>
            <div class="grid-column">
                <a href="#"><img class="portfolio-image" src="images/project-placeholder.png"></a>
            </div>
            <div class="grid-column">
                <a href="#"><img class="portfolio-image" src="images/project-placeholder.png"></a>
            </div>
            <div class="grid-column">
                <a href="#"><img class="portfolio-image" src="images/project-placeholder.png"></a>
            </div>
            <div class="grid-column">
                <a href="#"><img class="portfolio-image" src="images/project-placeholder.png"></a>
            </div>
        </div>
        <div class="icons">
            <a href="index.html"><img class="page-link" src="images/home-icon-1.png"></a>
            <a href="profile.html"><img class="page-link" src="images/profile-icon-1.png"></a>
        </div>
    </div>
</body>
</html>