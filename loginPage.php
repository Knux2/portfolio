<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bens Login Page</title>
    <link rel='stylesheet' type='text/css' href='css/normalise.css'>
    <link rel='stylesheet' type='text/css' href='css/loginPage.css'>
</head>

<body>
    <main>
        <h1>Login</h1>
        <form method="POST" action="admin.php">
            <h2>Username</h2>
            <input id="username" type="text" name="username">
            <h2>Password</h2>
            <input id="password" type="password" name="password">
            <br>
            <input class="button" type="submit" name="login" value="Login">
        </form>
    </main>
</body>
</html>
