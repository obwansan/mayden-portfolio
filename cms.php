<?php

require_once('profileFunctions.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CMS - Kevin O'Brien Portfolio</title>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="cms.css?id=<?php echo rand(1000,9999); ?>">
</head>
<body>
    <div class="container">

        <h1>Portfolio Website<br>Content Management System</h1>

        <form method="post" action="cms.php">
            <fieldset>
                <legend>Edit Profile Content</legend>

                <label for="text">Profile text paragraph 1:</label><br>
                <textarea name="profileText" id="text">
                    <?php
                    $result = getProfileText();
                    echo outputProfileText($result);

                    ?>
                </textarea><br>

                <label>Email:</label>
                    <input type="email" name="email"><br>

                <input type="image" src="#" alt="photo-of-kevin-obrien" width="100" height="100" id="photo"><br>

                <label>Photo:</label>
                <input type="text" name="photoLink"><br>

                <input type="submit" value="Change photo"><br>
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
