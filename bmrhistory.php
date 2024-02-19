<html lang="en">
<head>
    <style type="text/css">
    .header {
    color:#355C7D;
    padding:10px 10px 10px 10px;
    display: block;
    margin: 0 auto 0 auto;
    background-color:#ABCFD1;
    background-repeat: repeat-x;
    text-align:center;
    }
    body {
        background-color:#F6EEE0;
    }
    </style>
    <title>BMR History</title>
</head>
<body>
<?php //user 1
include('nav.php'); 
require('config.php');
?>
    <div class="main-content">
    <br>
<?php 

$sql="SELECT * FROM historyBMR";
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
        <td>เพศ</td>
        <td>อายุ</td>
        <td>น้ำหนัก</td>
        <td>ส่วนสูง</td>
        <td>กิจกรรม</td>
        <td>BMR</td>
        <td>TDEE</td>
        <td>Standard</td>
        <td>DATE</td>

    </tr>
        <?php while($row= mysqli_fetch_assoc($result)) : ?>
            <tr>
        <td><?php echo $row['accountBMR_id']?></td>
        <td><?php echo $row['firstname']?></td>
        <td><?php echo $row['lastname']?></td>
        <td><?php echo $row['gender']?></td>
        <td><?php echo $row['age']?></td>
        <td><?php echo $row['weight']?></td>
        <td><?php echo $row['height']?></td>
        <td><?php echo $row['activity']?></td>
        <td><?php echo $row['BMR']?></td>
        <td><?php echo $row['TDEE']?></td>
        <td><?php echo $row['Standard']?></td>
        <td><?php echo $row['DATE']?></td>

        </tr>
        
        <?php endwhile ?> 
    </table>
    </center>
<?php } else {
    
} ?>   
<?php //user4 admin

$sql="SELECT * FROM historyBMR";
$result = mysqli_query($connect,$sql);
if(!$result) {
    die ("Could not successfully run the query $sql" .mysqli_error($connect));
}
if($_SESSION['level'] > 3) {
?>
<center>
<a href="bmrhistory_create.php">สร้างประวัติ BMR</a><br><br>
    <table border="1">
    <tr>
        <td>ลำดับ</td>
        <td>ชื่อจริง</td>
        <td>นามสกุล</td>
        <td>เพศ</td>
        <td>อายุ</td>
        <td>น้ำหนัก</td>
        <td>ส่วนสูง</td>
        <td>กิจกรรม</td>
        <td>BMR</td>
        <td>TDEE</td>
        <td>Standard</td>
        <td>DATE</td>

        <?php if($_SESSION['level'] > 3) : ?>
        <td>แก้ไข</td>
        <?php endif ?>

        <?php if($_SESSION['level'] > 3) : ?>
        <td>ลบ</td>
        <?php endif ?>

    </tr>
        <?php while($row= mysqli_fetch_assoc($result)) : ?>
            <tr>
        <td><?php echo $row['accountBMR_id']?></td>
        <td><?php echo $row['firstname']?></td>
        <td><?php echo $row['lastname']?></td>
        <td><?php echo $row['gender']?></td>
        <td><?php echo $row['age']?></td>
        <td><?php echo $row['weight']?></td>
        <td><?php echo $row['height']?></td>
        <td><?php echo $row['activity']?></td>
        <td><?php echo $row['BMR']?></td>
        <td><?php echo $row['TDEE']?></td>
        <td><?php echo $row['Standard']?></td>
        <td><?php echo $row['DATE']?></td>

        <?php if($_SESSION['level'] > 3) : ?>
        <td><a href="bmrhistory_edit.php?id=<?php echo $row['accountBMR_id']?>">แก้ไข</a></td>
        <?php endif ?>

        <?php if($_SESSION['level'] > 3) : ?>
        <td><a href="bmrhistory_delete.php?id=<?php echo $row['accountBMR_id']?>">ลบ</a></td>
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