<?php

/**
 * Gets profile text from Db
 *
 * @param $text string Gets profile text from Db
 *
 * @return array
 */
function getProfileText() {
    $db = new PDO('mysql:host=127.0.0.1;dbname=portfolio-kevin', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $textQuery = $db->prepare("SELECT `text` FROM `profile`;");
    $textQuery->execute();
    $textArray = $textQuery->fetchAll();
    return $textArray;
}

/**
 * Outputs profile text to CMS
 *
 * @param $text string Outputs profile text
 *
 * @return string
 */
//function outputProfileText($textArray) {
//    return $textArray['text'];
//}
function outputProfileText(array $array): string{
    $paragraph = '';
    foreach ($array as $value) {
        $paragraph .= $value['text'];
    }
    return $paragraph;
}

/**
 * Outputs profile text to profile page
 *
 * @param $text string Outputs profile text
 *
 * @return string
 */
function outputParagraph(array $array): string{
    $paragraph = '';
    foreach ($array as $value) {
        $paragraph .= '<p>' . $value['text'] . '</p>';
    }
    return $paragraph;
}

/**
 * Gets email from Db
 *
 * @param $email string Gets profile email from Db
 *
 * @return array
 */
function getEmail() {
    $db = new PDO('mysql:host=127.0.0.1;dbname=portfolio-kevin', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $emailQuery = $db->prepare("SELECT `email` FROM `contact`;");
    $emailQuery->execute();
    $email = $emailQuery->fetch();
    return $email;
}

/**
 * Outputs profile email
 *
 * @param $email string Outputs profile email
 *
 * @return string
 */
function outputEmail($emailArray) {
    return $emailArray['email'];
}

/**
 * Gets photo from Db
 *
 * @param $photo string Gets photo from Db
 *
 * @return array
 */
function getPhoto() {
    $db = new PDO('mysql:host=127.0.0.1;dbname=portfolio-kevin', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $photoQuery = $db->prepare("SELECT image FROM images WHERE image LIKE '%profile%';");
    $photoQuery->execute();
    $photoArray = $photoQuery->fetch();
    return $photoArray;
}

/**
 * Outputs profile photo
 *
 * @param $photo string Outputs profile photo
 *
 * @return string
 */
function outputPhoto($photoArray) {
    return $photoArray['image'];
}

























