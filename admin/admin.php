<?php

require_once '../php/dbConnection.php';
require_once '../php/addMeFunctions.php';
require_once '../php/editMeFunctions.php';
require_once '../php/deleteMeFunctions.php';

$db = getDbConn();

if(isset($_POST['addParagraph'])){
    $addParagraph = $_POST['add'];
    $trimmedParagraph = trimWhiteSpace($addParagraph);
    $checkIfEmpty = checkIfEmpty($trimmedParagraph);
    if ($checkIfEmpty){
        addParagraph($db, $_POST['add']);
    }
}

if(isset($_POST['chooseFromDropdown'])){
    $editId = $_POST['editId'];
    $result = getTextById($db, $editId);
    $oldText = $result['paragraph'];
    $hiddenInput = hiddenInput($editId);
}

if(isset($_POST['editParagraph']) && isset($_POST['newId']) && isset ($_POST['edit'])){
    $getId = $_POST['newId'];
    $getParagraph = $_POST['edit'];
    $trimmedParagraph = trimWhiteSpace($getParagraph);
    $checkIfEmpty = checkIfEmpty($trimmedParagraph);
    if ($checkIfEmpty){
        editParagraph($db, $getId, $trimmedParagraph);
    }
}

if(isset($_POST['deleteFromDatabase'])){
    $deleteId = $_POST['deleteId'];
    deleteAboutMe($db, $deleteId);
}

$viewAboutMe = viewAboutMe($db);
$editDropDown = getParagraph($viewAboutMe);
$deleteDropDown = getParagraph($viewAboutMe);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bens Admin Page</title>
    <link rel='stylesheet' type='text/css' href='../css/normalise.css'>
    <link rel='stylesheet' type='text/css' href='../css/admin.css'>
</head>

<body>
    <header>
        <h1>Admin Page</h1>
        <h2>Welcome Ben</h2>
    </header>
    <section>
        <h3>About Me</h3>
        <div>
            <h4>Add information</h4>
            <form method="POST" action="admin.php">
                <textarea name="add"></textarea>
                <input type="submit" value="Add" name="addParagraph">
            </form>
        </div>
        <div>
            <h4>Edit information</h4>
            <p>Select Paragraph to Edit</p>
            <form method="POST" action="admin.php">
                <select class="dropDown" name="editId">
                    <?php
                    if(isset($editDropDown)){
                        echo $editDropDown;
                    } ?>
                </select>
                <input type="submit" name="chooseFromDropdown" value="Select Text">
            </form>
            <form method="POST" action="admin.php">
                <textarea name="edit"><?php
                    if(isset($oldText)){
                        echo $oldText;
                    } ?></textarea>
                    <?php
                    if(isset($hiddenInput)){
                        echo $hiddenInput;
                    } ?>
                <input type="submit" value="Edit" name="editParagraph">
            </form>
        </div>
        <div>
            <h4>Delete information</h4>
            <p>Select Paragraph to Delete</p>
            <form method="POST" action="admin.php">
                <select class="dropDown" name="deleteId">
                <?php if(isset($deleteDropDown)){
                    echo $deleteDropDown;
                } ?>
                </select>
                <input type="submit" name="deleteFromDatabase" value="Delete">
            </form>
        </div>
    </section>
</body>

