<head>
<link type="text/css" rel="stylesheet" href="main.css">
</head>
<center>
<?php require_once "nav.php"; ?>
<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$ldl2 = $_POST['ldl'];
$hdl2 = $_POST['hdl'];
$tri2 = $_POST['tri'];
$date = new DateTime();

$tc = round($ldl2 + $hdl2 + ($tri2/5));

echo $firstname." ".$lastname." ".$age." "."Date"." ".$date->format("d-m-Y H:i:s")."<br>" ;
$result = "<span>" . $tc . "</span>	 mg/dL ";

if ($tc >= 240) {
	$result .= "<b>สูง</b>";
} else if ($tc >= 200) {
	$result .= "<b>ค่อนข้างสูง</b>";
} else {
	$result .= "<b>ดีมาก</b>";
}


echo $result;

?>	
</center>
