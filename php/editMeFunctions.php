<?php

/*
 * Pulls array from database
 *
 * @param $db connection to database
 *
 * @return array Pulls multidimensional array from database
 */

function viewAboutMe(PDO $db) :array {
    $query = $db->prepare("SELECT `id`, `paragraph` FROM `about_me`;");
    $query->execute();
    return $query->fetchAll();
}

/*
 * Breaks down multidimensional array into string
 *
 * @param $viewAboutMe Multidimensional array pulled from database
 *
 * @return string Paragraphs on database are displayed on portfolio page
 */

function getParagraph(array $viewAboutMe) :string {
    $result = '';
    foreach($viewAboutMe as $aboutMeParagraph) {
        $result .= '<option value=' . $aboutMeParagraph['id'] .'>' . $aboutMeParagraph['paragraph'] .'</option>';
    }
    return $result;
}



function getTextById(PDO $db, $id){
    $query = $db->prepare("SELECT `id`, `paragraph` FROM `about_me` WHERE `id` = :id;");
    $query->bindparam(':id', $id);
    $query->execute();
    return $query->fetch();
}
