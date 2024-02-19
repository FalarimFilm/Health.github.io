<html lang="en">
<head>
<link type="text/css" rel="stylesheet" href="main.css">
    <title>BMI HISTORY</title>
</head>
<body>
<?php 
include('nav.php'); 
require('config.php');
?>
    <div class="main-content">
    <br>
<?php 

$sql="SELECT * FROM historyBMI";
$result = mysqli_query($connect,$sql);
if(!$result) {
    die ("Could not successfully run the query $sql" .mysqli_error($connect));
}
if($_SESSION['level'] == 1) {
?>
    <center>
    <table border="1">
    <tr>
        <td>ลำดับ</td>
        <td>ชื่อจริง</td>
        <td>นามสกุล</td>
        <td>อายุ</td>
        <td>น้ำหนัก</td>
        <td>ส่วนสูง</td>
        <td>BMI</td>
        <td>Standard</td>
        <td>Date</td>

    </tr>
        <?php while($row= mysqli_fetch_assoc($result)) : ?>
            <tr>
        <td><?php echo $row['accountbmi_id']?></td>
        <td><?php echo $row['firstname']?></td>
        <td><?php echo $row['lastname']?></td>
        <td><?php echo $row['age']?></td>
        <td><?php echo $row['weight']?></td>
        <td><?php echo $row['height']?></td>
        <td><?php echo $row['BMI']?></td>
        <td><?php echo $row['Standard']?></td>
        <td><?php echo $row['DATE']?></td>

        </tr>
        <?php endwhile ?>
    </table>
        </center>
<?php } else {
    
} ?>   

<?php 

$sql="SELECT * FROM historyBMI";
$result = mysqli_query($connect,$sql);
if(!$result) {
    die ("Could not successfully run the query $sql" .mysqli_error($connect));
}
if($_SESSION['level'] > 3) {
?>
    <center>
    <a href="bmihistory_create.php">สร้างประวัติ BMI</a><br><br>
    <table border="1">
    <tr>
        <td>ลำดับ</td>
        <td>ชื่อจริง</td>
        <td>นามสกุล</td>
        <td>อายุ</td>
        <td>น้ำหนัก</td>
        <td>ส่วนสูง</td>
        <td>BMI</td>
        <td>Standard</td>
        <td>Date</td>

        <?php if($_SESSION['level'] > 3) : ?>
        <td>แก้ไข</td>
        <?php endif ?>

        <?php if($_SESSION['level'] > 3) : ?>
        <td>ลบ</td>
        <?php endif ?>

    </tr>
        <?php while($row= mysqli_fetch_assoc($result)) : ?>
        <tr>
        <td><?php echo $row['accountbmi_id']?></td>
        <td><?php echo $row['firstname']?></td>
        <td><?php echo $row['lastname']?></td>
        <td><?php echo $row['age']?></td>
        <td><?php echo $row['weight']?></td>
        <td><?php echo $row['height']?></td>
        <td><?php echo $row['BMI']?></td>
        <td><?php echo $row['Standard']?></td>
        <td><?php echo $row['DATE']?></td>

        <?php if($_SESSION['level'] > 3) : ?>
        <td><a href="bmihistory_edit.php?id=<?php echo $row['accountbmi_id']?>">แก้ไข</a></td>
        <?php endif ?>

        <?php if($_SESSION['level'] > 3) : ?>
        <td><a href="bmihistory_delete.php?id=<?php echo $row['accountbmi_id']?>">ลบ</a></td>
        <?php endif ?>

        </tr>
        <?php endwhile ?>
    </table>        
    </center>
    
<?php } else {
    echo "<center><h3 class='error'>You are not admin, If you want to acess or update please contact to admin</h3></center>";
} ?>
    </div>
</body>
</html>
