<?php 
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="process.php" method="post">
        <label>Email :</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label>Passwaord :</label>
        <input type="password" name="password" id="password" maxlength="8" required>
        <br>
        <button type="submit" name="login">Login</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>