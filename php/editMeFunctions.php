<?php

/*
 * Pulls array from database
 *
 * @param $db connection to database
 *
 * @return array Pulls multidimensional array from database
 */

function viewAboutMe(PDO $db) :array {
    $query = $db->prepare("SELECT `id`, `paragraph` FROM `about_me` WHERE `deleted` = '0';");
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

/*
 * Pulls array from database and binds a parameter
 *
 * @param $db Connection to database
 *
 * @param $id string Links $id to id field in database
 *
 * @return retrieves single array from database
 */

function getTextById(PDO $db, string $id) :array {
    $query = $db->prepare("SELECT `id`, `paragraph` FROM `about_me` WHERE `id` = :id;");
    $query->bindparam(':id', $id);
    $query->execute();
    return $query->fetch();
}

/*
 * Function adds edited information to database
 *
 * @param $db PDO database connection
 *
 * @param $editParagraph string Information that will be added into database for previous entry
 */

function editParagraph(PDO $db, string $id, string $paragraph) {
    $query = $db->prepare("UPDATE `about_me` SET `paragraph` = :paragraph WHERE `id` = :id;");
    $query->bindparam(':id', $id);
    $query->bindparam(':paragraph', $paragraph);
    $query->execute();
}

/*
 * Function pulls Id from dropdown list ready to be sent back to database
 *
 * @param $editId string Id taken from dropdown list to be connected to paragraph put in text area
 *
 * @return string code to be called in HTML and connect to paragraph
 */

function hiddenInput(int $editId) {
    return '<input type="hidden" name="newId" value="'.$editId.'">';
}

/*
 * Function takes a string and returns false if it is empty and true if it has text
 *
 * @param string $string string to test if empty
 *
 * @return bool true or false if empty or not
 */

function checkIfEmpty (string $string) : bool {
    if (empty($string)) {
        $hasGotText = false;
    } else {
        $hasGotText = true;
    }
    return $hasGotText;
}

/*
 * Function trims white space if present
 *
 * @param $string string to to be trimmed
 *
 * @return $string trimmed string
 */

function trimWhiteSpace (string $string) : string {
    return trim($string);
}