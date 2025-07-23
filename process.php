<?php 
include('db.php');
session_start();



if($_SERVER["REQUEST_METHOD"]=="POST"){

   
    //registration process

    if(isset($_POST['registration'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $hashed_password=password_hash($password,PASSWORD_DEFAULT);
        
        $query="INSERT INTO user (name, email, password) VALUES ('$name','$email','$hashed_password')";
        $res=mysqli_query($conn,$query);
       
        if($res){
            echo "Registration successful";
            header("Location: loginpage.php");
            exit();
        }
    }

//login process
    if(isset($_POST['login'])){
      $email=$_POST['email'];
      $password=$_POST['password'];
        
    $query="SELECT * FROM user WHERE email='$email'";
    $res=mysqli_query($conn,$query);
    $num=mysqli_num_rows($res);
    if($num>0){
       $row=mysqli_fetch_assoc($res);
        $hashed_pass=$row['password'];
        // Verify the password
        if(password_verify($password, $hashed_pass)){
            $_SESSION['email']=$email;
            echo "Login successful";
            header("Location: dashboard.php");
            exit();
        }else{
            echo "Invalid email or password";
            //header("Location: loginpage.php");
        }

        
    }else{
        echo"Invalid email or password";
        header("Location: loginpage.php");
    }
    }

//upload image
if (isset($_POST['upload'])) {
    $image = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];

    if (in_array($image_type, $allowed_types)) {
        $target = "images/" . basename($image);
        $query = "UPDATE user SET image='$target' WHERE email='" . $_SESSION['email'] . "'";
        $res = mysqli_query($conn, $query);
        if ($res) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                echo "Image uploaded successfully";
                header("Location: dashboard.php");
                exit();
            } else {
                echo "Failed to upload image";
            }
        }
    } else {
        echo "Only image files are allowed.";
    }
}

}
?>