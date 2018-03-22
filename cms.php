<?php

session_start();

require_once 'profileFunctions.php';

$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio-kevin', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if ($_SESSION['loggedIn'] == false || $_SESSION['loggedIn'] == NULL) {
    header('Location: login.php');
    exit;
}
$profileText = outputProfileText(getProfileText($db));
$email = outputEmail(getEmail($db));

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
                    <textarea rows="20" cols="50" name="profileText" id="text"><?php echo $profileText ?></textarea><br>
                <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?php echo $email ?>"><br>
                <input type="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
