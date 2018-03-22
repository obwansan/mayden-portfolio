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
    $query = $db->prepare("SELECT `text` FROM `profile`;");
    $query->execute();
    $textArray = $query->fetch();
    return $textArray;
}

/**
 * Outputs profile text
 *
 * @param $text string Outputs profile text
 *
 * @return string
 */
function outputProfileText(array $textArray) :string {
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
    $query = $db->prepare("SELECT `email` FROM `contact`;");
    $query->execute();
    $emailArray = $query->fetch();
    return $emailArray;
}

/**
 * Outputs profile email
 *
 * @param $email string Outputs profile email
 *
 * @return string
 */
function outputEmail(array $emailArray) :string{
    return $emailArray['email'];
}

/**************************************************
 * Functions to push modifed content from CMS to Db
 **************************************************/

/**
 * Updates text on profile page
 *
 * @param $profileText string Updates profile text
 *
 * @return string
 */
function updateProfileText($db, $profileText) {
    $query = $db->prepare("UPDATE `profile` SET `text` = :profileText WHERE `id` = 1;");
    $query->bindParam(':profileText', $profileText);
    $query->execute();
}

/**
 * Updates email on profile page
 *
 * @param $email string Updates profile email
 *
 * @return string
 */
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
