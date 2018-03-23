<?php

session_start();


$correctUsername = 'obwansan';
$correctPassword = 'turnip100';

/**
 * Checks if username and password are correct
 *
 * @param $username string to be checked against $correctUsername
 * @param $password string to be checked against $correctPassword
 * @param $correctUsername string to be checked against $username
 * @param $correctPassword string to be checked against $password
 *
 * @return true if username & passwords match / session logged in, and false if not
 */
function checkCredentials($username, $correctUsername, $password, $correctPassword) {

    if ($username == $correctUsername && $password == $correctPassword) {
        $_SESSION['loggedIn'] = true;
        return true;
    } else {
        return false;
    }
}
