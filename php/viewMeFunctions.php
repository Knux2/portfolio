<?php

function viewAboutMe(PDO $db) {
    $query = $db->prepare("SELECT `paragraph` FROM `about_me` WHERE `deleted` = '0';");
    $query->execute();
    return $query->fetchAll();
}

function getParagraph($viewAboutMe) {
    $result = '';
    foreach($viewAboutMe as $paragraph) {
        $result .= '<h2 class="font1">' . $paragraph['paragraph'] .'</h2>';
    }
    return $result;
}
