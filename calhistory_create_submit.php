<?php 
require('config.php');

$accountcal_id = $_POST['accountcal_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$ldl = $_POST['ldl'];
$hdl = $_POST['hdl'];
$triglycerides = $_POST['triglycerides'];
$cholesterol = $_POST['cholesterol'];
$standard = $_POST['Standard'];

$sql = "INSERT INTO `historyCAL`(`accountcal_id`, `firstname`, `lastname`, `age`, `ldl`, `hdl`
        , `triglycerides`, `cholesterol`, `Standard`) 
        VALUES ('$accountcal_id','$firstname','$lastname','$age','$ldl','$hdl','$triglycerides','$cholesterol'
        ,'$standard')";
$result = mysqli_query($connect,$sql);

header('Location: calhistory.php');
?> 