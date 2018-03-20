

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CMS - Kevin O'Brien Portfolio</title>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="cmsFormPage.css">
</head>
<body>
    <div class="container">

        <h1>Portfolio Website<br>Content Management System</h1>

        <form method="post" action="cmsFormPage.php">
            <fieldset>
                <legend>Edit Profile Content</legend>

                <label for="txtP1">Profile text paragraph 1:</label><br>
                <textarea rows="4" cols="50" name="profileP1" id="txtP1"></textarea><br>

                <label for="txtP2">Profile text paragraph 2:</label><br>
                <textarea rows="4" cols="50" name="profileP1" id="txtP2"></textarea><br>

                <label for="txtP3">Profile text paragraph 3:</label><br>
                <textarea rows="4" cols="50" name="profileP1" id="txtP3"></textarea><br>


                <label>Email:</label>
                    <input type="email" name="email"><br>

                <input type="image" src="#" alt="photo-of-kevin-obrien" width="100" height="100" id="photo"><br>

                <label>Photo:</label>
                <input type="text" name="photoLink"><br>

                <input type="submit" value="Change photo"><br>
                <input type="submit">
            </fieldset>

            <fieldset>
                <legend>Edit Projects</legend>
                
            </fieldset>
        </form>


    </div>


</body>
</html>
