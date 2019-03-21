<?php

/*
 * Changes selection from drop down to 1 in deleted column
 *
 * @param $db PDO Connection to database
 *
 * @param $deleteChoice string Links $deleteChoice to id field in database
 *
 * @return array Pulls multidimensional array from database
 */

function deleteAboutMe(PDO $db, string $deleteChoice) :array {
    $query = $db->prepare("UPDATE `about_me` SET `deleted` = 1 WHERE `id` = :deleteChoice;");
    $query->bindparam(':deleteChoice', $deleteChoice);
    $query->execute();
    return $query->fetchAll();
}