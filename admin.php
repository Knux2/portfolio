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
        <p>Add additional information</p><form method="post">
            <textarea rows="4" cols="100" name="add"></textarea>
            <input type="submit" value="Add">
        </form>
        <p>Edit information</p>
        <button onclick="" class="dropbtn">Select Paragraph to Edit</button>
        <form method="post">
            <textarea rows="4" cols="100" name="edit"></textarea>
            <input type="submit" value="Edit">
        </form>
        <p>Delete information</p><form method="post">
            <textarea rows="4" cols="100" name="delete"></textarea>
            <input type="submit" value="Delete">
        </form>
    </div>
</body>

