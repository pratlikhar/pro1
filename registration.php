<?php
$conn = mysqli_connect('localhost', 'root', '') or die("Connection failed: ");
$db=mysqli_select_db($conn,'acquital');
echo 'Success';
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass1'];
mysqli_query($conn,"INSERT INTO users(name,email,password) values('".$name."','".$email."','".$pass."')");
echo '<br><a href="index.php">Go back to site</a>';
?>