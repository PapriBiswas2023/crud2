<?php 
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
    // Fetch user data from database
    $query = "SELECT name, email, password FROM user LIMIT 1";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $imagePath = !empty($row['image']) ? 'images/' . htmlspecialchars($row['image']) : null;
    ?>
    <h4>Name : <?php echo htmlspecialchars($row['name']); ?></h4>
    <h4>Email : <?php echo htmlspecialchars($row['email']); ?></h4>
    <?php if ($imagePath && file_exists($imagePath)): ?>
        <img src="<?php echo $imagePath; ?>" alt="Profile Image" style="max-width:200px;max-height:200px;">
     <?php endif; ?>
    <form action="process.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="image" accept="image/*">
        <button type="submit" name="upload">Upload</button>
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>
