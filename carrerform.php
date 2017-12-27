<?php
session_start();
 
include('connection.php');
 



$pic = $_FILES['pic']['name'];
$file_size =$_FILES['pic']['size'];
$file_tmp =$_FILES['pic']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$pic);

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$username=$_POST['username'];
$password=$_POST['password'];
 
mysqli_query($bd, "INSERT INTO member(fname, lname, gender, address, contact, picture, username, password)VALUES('$fname', '$lname', '$gender', '$address', '$contact', '$pic', '$username', '$password')");
 
header("location: index.php?remarks=success");
 
mysqli_close($con);
?>

