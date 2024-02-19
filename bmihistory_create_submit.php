<?php 
require('config.php');

$accountbmi_id = $_POST['accountbmi_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$bmi = $_POST['BMI'];
$standard = $_POST['Standard'];


$sql = "INSERT INTO `historyBMI` (`accountbmi_id`, `firstname`, `lastname`, `age`, `weight`, `height`, `BMI`, `Standard`) 
        VALUES ('$accountbmi_id','$firstname','$lastname','$age','$weight','$height','$bmi','$standard')";
$result = mysqli_query($connect,$sql);

header('Location: bmihistory.php');
?> 