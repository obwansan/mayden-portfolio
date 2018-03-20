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

function getEmail() {



}