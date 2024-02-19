<?php 
require('config.php');

$id=$_GET['id'];

$accountcal_id = $_POST['accountcal_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$ldl = $_POST['ldl'];
$hdl = $_POST['hdl'];
$triglycerides = $_POST['triglycerides'];
$cholesterol = $_POST['cholesterol'];
$standard = $_POST['Standard'];

$sql = "UPDATE historyCAL SET accountcal_id = '$accountcal_id',firstname = '$firstname'
        ,lastname = '$lastname' ,age = '$age' ,ldl = '$ldl',hdl = '$hdl'
        ,triglycerides = '$triglycerides',cholesterol = '$cholesterol',Standard = '$standard'
        WHERE accountcal_id = $id ";

$result = mysqli_query($connect,$sql);

header('Location: calhistory.php');
?> 
