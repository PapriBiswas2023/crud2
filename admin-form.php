<?php
include('db.php');
$id= intval($_GET['id']);
$sql="SELECT * FROM user WHERE id='$id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="admin-prc.php" method="post" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required   value="<?=$row['name']?>">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required value="<?=$row['email']?>">
        <br>
        <label>Image</label>
        <input type="file" name="image" id="image" value="<?=row['image']?>">
        <br>
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>