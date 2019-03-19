<?php

function addParagraph(PDO $db, string $addParagraph) {
    $query = $db->prepare("INSERT INTO `about_me` (`paragraph`) VALUES (:addParagraph);");
    $query->execute(['addParagraph'=>$addParagraph]);
}