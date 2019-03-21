<?php

/*
 * Function adds new information to database
 *
 * @param $db PDO database connection
 *
 * @param $addParagraph string Information that will be added into database
 */
function addParagraph(PDO $db, string $addParagraph) {
    $query = $db->prepare("INSERT INTO `about_me` (`paragraph`) VALUES (:addParagraph);");
    $query->execute(['addParagraph'=>$addParagraph]);
}