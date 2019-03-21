<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bens Login Page</title>
    <link rel='stylesheet' type='text/css' href='css/normalise.css'>
    <link rel='stylesheet' type='text/css' href='css/style.css'>
</head>

<body>
    <h1>Login</h1>
    <form method="POST" action="admin.php">
        <h2>Username</h2>
        <input id="username" type="text" name="username">
        <h2>Password</h2>
        <input id="password" type="password" name="password">
        <input class="button" type="submit" name="login" value="Login">
    </form>
</body>
</html>
