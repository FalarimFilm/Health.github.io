<?php 
require('config.php');
$id=$_GET['id'];

$sql ="DELETE FROM historyCAL WHERE accountcal_id = $id";
$result = mysqli_query($connect,$sql);
header('Location: calhistory.php');