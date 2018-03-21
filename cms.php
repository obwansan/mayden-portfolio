<?php

require_once 'profileFunctions.php';

$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio-kevin', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Redirect back to CMS page after clicking submit
if ($_POST) {
    header('Location: cms.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CMS - Kevin O'Brien Portfolio</title>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="cms.css">
</head>
<body>
    <div class="container">

        <h1>Portfolio Website<br>Content Management System</h1>

        <form method="post" action="profileFunctions.php">
            <fieldset>
                <legend>Edit Profile Content</legend>

                <label for="text">Profile text:</label><br>
                <textarea rows="20" cols="50" name="profileText" id="text"><?php $textArray = getProfileText($db); echo outputProfileText($textArray); ?>
                </textarea><br>

                <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?php $emailArray = getEmail($db); echo outputEmail($emailArray); ?>">
                    <br>

                <input type="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
