<?php

require_once('profileFunctions.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CMS - Kevin O'Brien Portfolio</title>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <!-- rand() in php is to fix problem with css file not working. A vagrant / virtualbox issue  -->
    <link rel="stylesheet" type="text/css" href="cms.css?id=<?php echo rand(1000,9999); ?>">
</head>
<body>
    <div class="container">

        <h1>Portfolio Website<br>Content Management System</h1>

        <form method="post" action="cms.php">
            <fieldset>
                <legend>Edit Profile Content</legend>

                <label for="text">Profile text:</label><br>
                <textarea rows="25" cols="50" name="profileText" id="text">
                    <?php
                    $textArray = getProfileText();
//                    echo outputProfileText($textArray);
                    echo outputParagraph($textArray);
                    ?>
                </textarea><br>

                <label>Email:</label>
                    <input type="email" name="email" value="<?php $emailArray = getEmail(); echo outputEmail($emailArray); ?>">
                    <br>

                <label>Photo:</label>
                <img src="/sites/academy-php7/html/portfolio/images/<?php $photoArray = getPhoto(); echo outputPhoto($photoArray); ?>" alt="photo-of-kevin-obrien" width="100" height="100" id="photo"><br>

                <input type="text" name="photoLink" value="<?php $photoArray = getPhoto(); echo outputPhoto($photoArray); ?>"><br>

                <input type="file" value="Change photo"><br>
                <input type="submit">
            </fieldset>
        </form>

        <form>
            <fieldset>
                <legend>Edit Projects</legend>
                <select>
                    <option>Mayden Academy Logo</option>
                    <option>Pilot Shop Site Clone</option>
                    <option>Project Placeholder</option>
                    <option>Project Placeholder</option>
                    <option>Project Placeholder</option>
                    <option>Project Placeholder</option>
                    <option>Project Placeholder</option>
                    <option>Project Placeholder</option>
                </select>

            </fieldset>
        </form>


    </div>


</body>
</html>
