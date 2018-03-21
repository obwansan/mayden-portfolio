<?php

/***********************************************
 * Functions to pull content from Db to CMS page
 ***********************************************/

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
    $textArray = $textQuery->fetch();
    return $textArray;
}

/**
 * Outputs profile text
 *
 * @param $text string Outputs profile text
 *
 * @return string
 */
function outputProfileText($textArray) {
    return $textArray['text'];
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
    return $emailArray['email'];
}

/**************************************************
 * Functions to push modifed content from CMS to Db
 **************************************************/


function updateProfileText($db, $profileText) {
    $query = $db->prepare("UPDATE `profile` SET `text` = :profileText WHERE `id` = 1;");
    $query->bindParam(':profileText', $profileText);
    $query->execute();
}

function updateEmail($db, $email) {
    $query = $db->prepare("UPDATE `contact` SET `email` = :email WHERE `id` = 1;");
    $query->bindParam(':email', $email);
    $query->execute();
}

$profileText = $_POST['profileText'];
$email = $_POST['email'];

if($profileText != NULL && $email != NULL) {
    $db = new PDO('mysql:host=127.0.0.1;dbname=portfolio-kevin', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    updateProfileText($db, $profileText);
    updateEmail($db, $email);

    header('Location: cms.php');
    exit;
}





















