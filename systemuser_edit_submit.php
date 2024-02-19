<?php 
require('config.php');

$id=$_GET['id'];

$systemid= $_POST['user_id'];
$name= $_POST['username'];
$password= $_POST['password'];
$level= $_POST['level'];

$sql = "UPDATE systemuser SET user_id = '$systemid ',username = '$name',password ='$password',level = '$level' WHERE user_id = $id ";

$result = mysqli_query($connect,$sql);

header('Location: systemuser.php');
?> 
