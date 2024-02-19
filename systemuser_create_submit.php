<?php 
require('config.php');

$user_id= $_POST['user_id'];
$name= $_POST['username'];
$password= $_POST['password'];
$level= $_POST['level'];

$sql = "INSERT INTO `systemuser`(`user_id`, `username`,`password`,`level`) VALUES ('$user_id','$name','$password','$level')";
$result = mysqli_query($connect,$sql);


header('Location:systemuser.php');
?> 