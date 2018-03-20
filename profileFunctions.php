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

    $textQuery = $db->prepare("SELECT * FROM `profile`;");
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
}

/**
 * Outputs profile text
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

    $emailQuery = $db->prepare("SELECT `profile`.`email` FROM `profile`;");
    $emailQuery->execute();
    $email = $emailQuery->fetch();
//    var_dump($email);
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

    $photoQuery = $db->prepare("SELECT `profile`.`photo` FROM `profile`;");
    $photoQuery->execute();
    $photo = $photoQuery->fetch();
    return $photo;
}

/**
 * Outputs profile photo
 *
 * @param $photo string Outputs profile photo
 *
 * @return string
 */
function outputPhoto($photoArray) {
    return $photoArray['photo'];
}

























