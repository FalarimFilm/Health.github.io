<head>
<link type="text/css" rel="stylesheet" href="main.css">
</head>
<center>
<?php require_once "nav.php"; ?>
<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender']; //เพศ
$height = $_POST['height']; //ส่วนสูง
$weight = $_POST['weight']; //น้ำหนัก
$age = $_POST['age']; // อายุ
$rate = $_POST['rate']; //กิจกรรม
$date = new DateTime();

$bmr = 0; //ค่าว่างเอามาใช้คำนวณ

if ($gender == 'male') {
	$bmr = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
} else if ($gender == 'female') {
	$bmr = 665 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
}

$mul = 0;

if($rate == 0){
    $mul = 1.2;
}elseif($rate = 1){
    $mul =1.375;
}elseif($rate = 2){
    $mul =1.55;
}elseif($rate = 3){
    $mul =1.725;
}elseif($rate = 4){
    $mul =1.9;
}

echo $firstname." ".$lastname." ".$age." ".$gender." "."Date"." ".$date->format("d-m-Y H:i:s")."<br>" ;
echo "BMR (Basal Metabolic Rate) <span><b>" . round($bmr) . "</b></span> kilocal<br>";
echo "TDEE (Total Daily Energy Expenditure)<span><b>" . round($bmr * $mul) . "</b></span> kilocal";

?>    
</center>
