<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=portfolio-kevin', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// get profile text and email from db
$profileTextArray = getProfileText($db);
$profileTextString = outputProfileText($profileTextArray);
$emailArray = getEmail($db);
$emailString = outputEmail($emailArray);


/***********************************************
 * Functions to pull content from Db to CMS page
 ***********************************************/

/**
 * Gets profile text from Db
 *
 * @param $db object Gets profile text from Db
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
 * @param $textArray array Outputs profile text
 *
 * @return string
 */
function outputProfileText($textArray) {
    return $textArray['text'];
}

/**
 * Gets email from Db
 *
 * @param $db string Gets profile email from Db
 *
 * @return array
 */
function getEmail($db)  {
    $query = $db->prepare("SELECT `email` FROM `contact`;");
    $query->execute();
    $emailArray = $query->fetch();
    return $emailArray;
}

/**
 * Outputs profile email
 *
 * @param $emailArray array Outputs profile email
 *
 * @return string
 */
function outputEmail($emailArray) {
   return $emailArray['email'];
}

/**************************************************
 * Functions to push modifed content from CMS to Db
 **************************************************/

/**
 * Updates text on profile page by updating database
 *
 * @param $profileText string Updates profile text
 * @param $db object Gets profile text from Db
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
 */
function updateEmail($db, $email) {
    $query = $db->prepare("UPDATE `contact` SET `email` = :email WHERE `id` = 1;");
    $query->bindParam(':email', $email);
    $query->execute();
}
// to prevent 'undefined variable' notice
$profileText = '';
$email = '';

// get text from the post array
if (isset($_POST['profileText'])) {
    $profileText = $_POST['profileText'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

// if there is profile text and an email, update the db and redirect to cms page
if($profileText != NULL && $email != NULL) {

    $db = new PDO('mysql:host=127.0.0.1;dbname=portfolio-kevin', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    updateProfileText($db, $profileText);
    updateEmail($db, $email);

    header('Location: cms.php');
    exit;
}