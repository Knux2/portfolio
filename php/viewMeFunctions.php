<?php

/*
 * Pulls array from database
 *
 * @param $db connection to database
 *
 * @return array Pulls multidimensional array from database
 */

function viewAboutMe(PDO $db) :array {
    $query = $db->prepare("SELECT `paragraph` FROM `about_me` WHERE `deleted` = '0';");
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
        $result .= '<h2 class="font1">' . $aboutMeParagraph['paragraph'] .'</h2>';
    }
    return $result;
}
