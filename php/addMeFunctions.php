<?php

function addParagraph(PDO $db, string $addParagraph) :string {
    $query = $db->prepare("INSERT INTO `about_me` (`paragraph`) VALUES (:addParagraph);");
    $query->bindParam('addParagraph', $addParagraph);
    $query->execute();
}