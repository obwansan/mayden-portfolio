<?php

//var_dump($_POST);

function selectProjectImage () {

    $imageQuery = $db->prepare("SELECT `image-ref` FROM `portfolio-kevin`;");
    $imageQuery->execute();
    $image = $imageQuery->fetchAll();

}

function selectProjectLink () {

    $linkQuery = $db->prepare("SELECT `link-ref` FROM `portfolio-kevin`;");
    $linkQuery->execute();
    $link = $linkQuery->fetchAll();

}

selectProjectImage ();
selectProjectLink ();