<?php 
//update usr process
//delete user process
if(isset($_GET['del_id'])){
    $id= intval($_GET['del_id']); // Converts the 'del_id' value to an integer
    $delQuery="DELETE FROM user WHERE id='$id'";
    $delResult=mysqli_query($conn,$delQuery);
    if($delResult){
        echo "User deleted successfully";
        header("Location: adminpage.php");
        exit();
}
?>