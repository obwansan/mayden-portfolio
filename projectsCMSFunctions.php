<?php

//var_dump($_POST);

function setUpPDO () {

    $db = new PDO('mysql:host=127.0.0.1;dbname=portfolio-kevin', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

}

function selectProjectImage () {

    $imageQuery = $db->prepare("SELECT `image-ref` FROM `portfolio-kevin`;");
    $imageQuery->execute();
    // Have to assign / return the $query results (an array) to a variable to run a loop on it
    $image = $imageQuery->fetchAll();

}

function selectProjectLink () {

    $linkQuery = $db->prepare("SELECT `link-ref` FROM `portfolio-kevin`;");
    $linkQuery->execute();
    // Have to assign / return the $query results (an array) to a variable to run a loop on it
    $link = $linkQuery->fetchAll();

}





