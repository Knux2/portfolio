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
    <h1>Admin Page</h1>
    <h2>Welcome Ben</h2>
    <h3>About Me</h3>
    Add additional information<form method="post">
        <textarea rows="4" cols="100" name="add"></textarea>
        <input type="submit" value="Add">
    </form>
    Edit information<form method="post">
        <textarea rows="4" cols="100" name="edit"></textarea>
        <input type="submit" value="Edit">
    </form>
    Delete information<form method="post">
        <textarea rows="4" cols="100" name="delete"></textarea>
        <input type="submit" value="Delete">
    </form>
</body>

