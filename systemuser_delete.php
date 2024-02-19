<?php 
require('config.php');
$id=$_GET['id'];

$sql ="DELETE FROM systemuser WHERE user_id = $id";
$result = mysqli_query($connect,$sql);
header('Location: systemuser.php');