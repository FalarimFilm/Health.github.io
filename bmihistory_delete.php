<?php 
require('config.php');
$id=$_GET['id'];

$sql ="DELETE FROM historyBMI WHERE accountbmi_id = $id";
$result = mysqli_query($connect,$sql);
header('Location: bmihistory.php');