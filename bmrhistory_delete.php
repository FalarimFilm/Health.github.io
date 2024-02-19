<?php 
require('config.php');
$id=$_GET['id'];

$sql ="DELETE FROM historyBMR WHERE accountBMR_id = $id";
$result = mysqli_query($connect,$sql);
header('Location: bmrhistory.php');