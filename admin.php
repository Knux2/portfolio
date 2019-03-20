<?php

require_once 'php/dbConnection.php';
require_once 'php/addMeFunctions.php';
require_once 'php/editMeFunctions.php';

$db = getDbConn();

if(isset($_POST["chooseFromDropdown"])){
    $editId = $_POST['editId'];
    $result = getTextById($db, $editId);
    $oldText = $result['paragraph'];
}

if(isset($_POST['editParagraph'])){
    editParagraph($db, $_POST['edit']);
}

if(isset($_POST['addParagraph'])){
    addParagraph($db, $_POST['add']);
}

$viewAboutMe = viewAboutMe($db);
$editDropDown = getParagraph($viewAboutMe);

$deleteDropDown = '<select>
                    <option>Paragraph 1</option>
                    <option>Paragraph 2</option>
                    <option>Paragraph 3</option>
                </select>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bens Admin Page</title>
    <link rel='stylesheet' type='text/css' href='css/normalise.css'>
    <link rel='stylesheet' type='text/css' href='css/admin.css'>
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
            <form method="post" action="admin.php">
                <textarea name="add"></textarea>
                <input type="submit" value="Add" name="addParagraph">
            </form>
        </div>
        <div>
            <h4>Edit information</h4>
            <p>Select Paragraph to Edit</p>
            <form method="post" action="admin.php">
                <select class="dropDown" name="editId">
                    <?php echo $editDropDown; ?>
                </select>
                <input type="submit" name="chooseFromDropdown" value="Select Text">
            </form>
            <form method="post" action="admin.php">
                <textarea name="edit"><?php echo $oldText; ?></textarea>

                <input type="submit" value="Edit" name="editParagraph">
            </form>
        </div>
        <div>
            <h4>Delete information</h4>
            <p>Select Paragraph to Delete</p>
            <form method="post" action="aboutMe.php">
                <?php echo $deleteDropDown; ?>
                <input type="submit" value="Delete">
            </form>
        </div>
    </section>
</body>

