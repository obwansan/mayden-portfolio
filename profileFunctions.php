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


/***********************************************
 * Functions to push modifed content from CMS to Db
 ***********************************************/

function updateProfileText() {
    $profileText = $db->prepare("UPDATE profile SET ;");
    $profileText->execute();
}


















