<?php

function deleteAboutMe(PDO $db) :array {
    $query = $db->prepare("UPDATE `about_me` SET `deleted` = 1 WHERE `id` = :deleteChoice;");
    $query->bindparam(':deleteChoice', $deleteChoice);
    $query->execute();
    return $query->fetchAll();
}