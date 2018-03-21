<?php

/**
 * Gets profile text from Db
 *
 * @param $text string Gets profile text from Db
 *
 * @return array
 */
function getProfileText($db) {
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
function getEmail($db) {
    $emailQuery = $db->prepare("SELECT `email` FROM `contact`;");
    $emailQuery->execute();
    $emailArray = $emailQuery->fetch();
    return $emailArray;
}

/**
 * Outputs profile email
 *
 * @param $email string Outputs profile email
 *
 * @return string
 */
function outputEmail($emailArray) {
//    var_dump($emailArray);
    return $emailArray['email'];
}

/**
 * Gets photo from Db
 *
 * @param $photo string Gets photo from Db
 *
 * @return array
 */
function getPhoto($db) {
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

/**
 * Gets alt-text from Db
 *
 * @param $altTextArray Gets alt-text from Db
 *
 * @return array
 */
function getAltText($db) {
    $altTxtQuery = $db->prepare("SELECT altText FROM images WHERE altText LIKE '%kevin%';");
    $altTxtQuery->execute();
    $altTxtArray = $altTxtQuery->fetch();
    return $altTxtArray;
}

/**
 * Outputs alt-text
 *
 * @param $altTxt string Outputs alt-text
 *
 * @return string
 */
function outputAltTxt($altTxtArray) {
    return $altTxtArray['altText'];
}

