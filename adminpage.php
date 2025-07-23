<?php 
include('db.php');
$sql="SELECT * FROM user";
$res=mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php if(mysqli_num_rows($res)): ?>
                    <?php while($row=mysqli_fetch_assoc($res)):?>
                <td><?=$row['id']?></td>
                <td><?=htmlspecialchars($row['name'])?></td>
                <td><?=htmlspecialchars($row['email'])?></td>
                <td>
                    <img src=<?=$row['image']?> height="50" width="50"/>
                </td>
                <td >
                    <a href="admin-form.php?id=<?=$row['id']?>" onClick="return confirm('Are you sure you want to edit this user?');">
                        <img src="edit.png" alt="Edit" height="20" width="20">
                    </a>
                    <a href="admin-prc.php?del_id=<?=$row['id']?>" onClick="return confirm('Are you sure you want to delete this user?');">
                        <img src="del.png alt="del" height="20" width="20"/>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>