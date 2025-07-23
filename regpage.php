
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="process.php" method="post">
        <label>Name</label>
        <input type="text" name="name" id="name" required>
        <br>    
        <label>Email</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label>Password</label>
        <input type="password" name="password" id="password" maxlength="8" required>
        <br>    
        <button type="submit" name="registration">Register</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>