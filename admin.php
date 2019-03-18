<?php



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
        <h3>About Me</h3>
    </header>
    <div class="forms">
        <h4>Add information</h4><form method="post">
            <textarea rows="4" cols="100" name="add"></textarea>
            <input type="submit" value="Add">
        </form>
        <h4>Edit information</h4>
        <p>Select Paragraph to Edit</p>
            <select>
                <option>Paragraph 1</option>
                <option>Paragraph 2</option>
                <option>Paragraph 3</option>
            </select>
        <form method="post">
            <textarea rows="4" cols="100" name="edit"></textarea>
            <input type="submit" value="Edit">
        </form>
        <h4>Delete information</h4>
        <p>Select Paragraph to Delete</p>
            <select>
                <option>Paragraph 1</option>
                <option>Paragraph 2</option>
                <option>Paragraph 3</option>
            </select>
            <input type="submit" value="Delete">
        </form>
    </div>
</body>

