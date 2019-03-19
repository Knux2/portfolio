<?php

function addParagraph(PDO $db, string $addParagraph) {
    $query = $db->prepare("INSERT INTO `about_me` (`paragraph`) VALUES (:addParagraph);");
    $query->bindParam('addParagraph', $addParagraph);
    $query->execute();
}