<?php

function viewAboutMe(PDO $db, string $paragraph) {
    $query = $db->prepare("SELECT `paragraph` FROM `about_me` WHERE `deleted` = '0';");
    $query->execute();
    return $query->fetch();
}