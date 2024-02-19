<html lang="en">
<head>
<link type="text/css" rel="stylesheet" href="main.css">
    </style>
    <title>Cholesterol History</title>
</head>
<body>
<?php 
require('config.php');
include('nav.php');
?>
    <div class="main-content">
    <br>
    <?php

$sql="SELECT * FROM historyCAL";
$result = mysqli_query($connect,$sql);
if(!$connect){
    die("Could not successfully run the query $sql".mysqli_error($connect));
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
        <td>LDL</td>
        <td>HDL</td>
        <td>Triglycerides</td>
        <td>Cholesterol</td>
        <td>Standard</td>
        <td>Date</td>

    </tr>
        <?php while($row= mysqli_fetch_assoc($result)) : ?>
        <tr>
        <td><?php echo $row['accountcal_id']?></td>
        <td><?php echo $row['firstname']?></td>
        <td><?php echo $row['lastname']?></td>
        <td><?php echo $row['age']?></td>
        <td><?php echo $row['ldl']?></td>
        <td><?php echo $row['hdl']?></td>
        <td><?php echo $row['triglycerides']?></td>
        <td><?php echo $row['cholesterol']?></td>
        <td><?php echo $row['Standard']?></td>
        <td><?php echo $row['Date']?></td>
        <?php endwhile ?>
    </table>
    </center>
<?php } else {

} ?>

<?php

$sql="SELECT * FROM historyCAL";
$result = mysqli_query($connect,$sql);
if(!$connect){
    die("Could not successfully run the query $sql".mysqli_error($connect));
}
if($_SESSION['level'] > 3) {
?>
    <center>
    <a href="calhistory_create.php">สร้างประวัติ Cholesterol</a><br><br>
    <table border="1">
    <tr>
        <td>ลำดับ</td>
        <td>ชื่อจริง</td>
        <td>นามสกุล</td>
        <td>อายุ</td>
        <td>LDL</td>
        <td>HDL</td>
        <td>Triglycerides</td>
        <td>Cholesterol</td>
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
        <td><?php echo $row['accountcal_id']?></td>
        <td><?php echo $row['firstname']?></td>
        <td><?php echo $row['lastname']?></td>
        <td><?php echo $row['age']?></td>
        <td><?php echo $row['ldl']?></td>
        <td><?php echo $row['hdl']?></td>
        <td><?php echo $row['triglycerides']?></td>
        <td><?php echo $row['cholesterol']?></td>
        <td><?php echo $row['Standard']?></td>
        <td><?php echo $row['Date']?></td>

        <?php if($_SESSION['level'] > 3) : ?>
        <td><a href="calhistory_edit.php?id=<?php echo $row['accountcal_id']?>">แก้ไข</a></td>
        <?php endif ?>

        <?php if($_SESSION['level'] > 3) : ?>
        <td><a href="calhistory_delete.php?id=<?php echo $row['accountcal_id']?>">ลบ</a></td>
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