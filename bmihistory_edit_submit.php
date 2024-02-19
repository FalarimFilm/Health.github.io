<?php 
require('config.php');

$id=$_GET['id'];

$accountbmi_id = $_POST['accountbmi_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$bmi = $_POST['BMI'];
$standard = $_POST['Standard'];
$date = new DateTime();
$date->format("d-m-Y H:i:s");


$sql = "UPDATE historyBMI SET accountbmi_id = '$accountbmi_id ',firstname = '$firstname',lastname = '$lastname'
        ,age = '$age',weight = '$weight',height = '$height',BMI = '$bmi',Standard = '$standard'
        WHERE accountbmi_id = $id ";

$result = mysqli_query($connect,$sql);

header('Location: bmihistory.php');
?> 
