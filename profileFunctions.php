<?php

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
function getProfileText(object $db): array {
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
function outputProfileText(array $textArray): string {
    return $textArray['text'];
}

/**
 * Gets email from Db
 *
 * @param $db string Gets profile email from Db
 *
 * @return array
 */
function getEmail(object $db): array  {
    $query = $db->prepare("SELECT `email` FROM `contact`;");
    $query->execute();
    $emailArray = $query->fetch();
    return $emailArray;
}

/**
 * Outputs profile email
 *
 * @param $emailArray string Outputs profile email
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
 * Updates text on profile page by updating database
 *
 * @param $profileText string Updates profile text
 * @param $db object Gets profile text from Db
 */
function updateProfileText(object $db, string $profileText) {
    $query = $db->prepare("UPDATE `profile` SET `text` = :profileText WHERE `id` = 1;");
    $query->bindParam(':profileText', $profileText);
    $query->execute();
}

/**
 * Updates email on profile page
 *
 * @param $email string Updates profile email
 */
function updateEmail(object $db, string $email) {
    $query = $db->prepare("UPDATE `contact` SET `email` = :email WHERE `id` = 1;");
    $query->bindParam(':email', $email);
    $query->execute();
}
