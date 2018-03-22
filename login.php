<?php

session_start();

require_once 'loginFunctions.php';

$username = $_POST['username'];
$password = $_POST['password'];

if ($_SESSION['loggedIn'] != NULL && $_SESSION['loggedIn'] === true) {
    header('Location: cms.php');
    exit;
} else {
    if (checkCredentials($username, $correctUsername, $password, $correctPassword)) {
        header('Location: cms.php');
        exit;
    }
}

?>

<form method="post" action="login.php">
    <label>Username:
        <input type="text" name="username">
    </label>
    <label>Password:
        <input type="text" name="password">
    </label>
    <input type="submit">
</form>

