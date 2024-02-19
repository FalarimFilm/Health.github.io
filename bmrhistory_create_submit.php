<?php 
require('config.php');

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


$sql = "INSERT INTO `historyBMR`(`accountBMR_id`, `firstname`, `lastname`, `gender`, `age`, `weight`, `height`, `activity`, `BMR`
        , `TDEE`, `Standard`) 
        VALUES ('$accountbmr_id','$firstname','$lastname','$gender','$age','$weight','$height'
        ,'$activity','$bmr','$tdee','$standard')";

$result = mysqli_query($connect,$sql);

header('Location: bmrhistory.php');
?> 