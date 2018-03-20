<?php

/**
 * Gets profile text from Db
 *
 * @param $text string Gets profile text from Db
 *
 * @return Array
 */
function getProfileText() {
    $db = new PDO('mysql:host=127.0.0.1;dbname=portfolio-kevin', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $textQuery = $db->prepare("SELECT `profile`.`text` FROM `profile`;");
    $textQuery->execute();
    $text = $textQuery->fetch();
    return $text;
}

/**
 * Outputs profile text
 *
 * @param $text string Outputs profile text
 *
 * @return String
 */
function outputProfileText($textArray) {
    return $textArray['text'];
}

/**
 * Gets email from Db
 *
 * @param $email string Gets profile email from Db
 *
 * @return Array
 */
function getEmail() {
    $db = new PDO('mysql:host=127.0.0.1;dbname=portfolio-kevin', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $emailQuery = $db->prepare("SELECT `profile`.`text` FROM `profile`;");
    $emailQuery->execute();
    $email = $textQuery->fetch();
//    var_dump($email);
    return $email;
}

/**
 * Outputs profile email
 *
 * @param $email string Outputs profile email
 *
 * @return String
 */
function outputEmail($emailArray) {
    return $emailArray['email'];
}