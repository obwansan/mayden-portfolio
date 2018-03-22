<?php

session_start();

$correctUsername = 'obwansan';
$correctPassword = 'turnip100';

/**
 * Checks if username and password are correct
 *
 * @param $username, $password, $correctUsername, $correctPassword string
 *
 * @return boolean
 */
function checkCredentials($username, $correctUsername, $password, $correctPassword) {

    if ($username == $correctUsername && $password == $correctPassword) {
        $_SESSION['loggedIn'] = true;
        return true;
    } else {
        return false;
    }
}
