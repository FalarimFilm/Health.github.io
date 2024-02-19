<html>
<head>
<link type="text/css" rel="stylesheet" href="main.css">
</head>
<body>

<?php
include('nav.php');
require('config.php');
?>
    <div class="main-content">
    <br>
<?php 

$sql="SELECT * FROM systemuser";
$result = mysqli_query($connect,$sql);
if(!$result) {
    die ("Could not successfully run the query $sql" .mysqli_error($connect));
}
if($_SESSION['level'] > 0) { 
?>
    <center>
        <a href="analysis-bmi.php">ANALYSIS</a>
    </center>
    
    <?php
    ?>
<?php } else {
    echo "<center><h3 class='error'>You are not admin, If you want to acess or update please contact to admin</h3></center>";
} ?>   

    </div>    


</body>
</html>