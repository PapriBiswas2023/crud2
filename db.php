<?php 
$server="Localhost";
$username="root";
$databasename="mytest";
$password="";
$conn=mysqli_connect($server,$username,$password,$databasename);
if(!$conn){
    die("connection failed :").mysqli_connect_error();
}else{
    //echo "connected";
}
?>