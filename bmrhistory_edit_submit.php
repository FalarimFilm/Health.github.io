<?php 
require('config.php');

$id=$_GET['id'];

$accountbmr_id = $_POST['accountBMR_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$activity = $_POST['activity'];
$bmr = $_POST['BMR'];
$tdee = $_POST['TDEE'];
$standard = $_POST['Standard'];



$sql = "UPDATE historyBMR SET accountBMR_id = '$accountbmr_id ',firstname = '$firstname' ,lastname = '$lastname' ,gender = '$gender' 
        ,age = '$age' ,weight = '$weight' ,height = '$height' ,activity = '$activity' ,BMR = '$bmr',TDEE = '$tdee'
        ,Standard = '$standard'
        WHERE accountBMR_id = $id ";

$result = mysqli_query($connect,$sql);

header('Location: bmrhistory.php');
?> 
