<html lang="en">
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
if($_SESSION['level'] > 3) { 
?>
    <center>
    <a href="systemuser_create.php">สร้างข้อมูลสมาชิกในระบบ</a><br><br>
    <table border="1">
    <tr>
        <td>ลำดับไอดี</td>
        <td>ชื่อ</td>
        <td>รหัส</td>
        <td>เลเวล</td>

        <?php if($_SESSION['level'] > 3) : ?>
        <td>แก้ไข</td>
        <?php endif ?>

        <?php if($_SESSION['level'] > 3) : ?>
        <td>ลบ</td>
        <?php endif ?>

    </tr>
        <?php while($row= mysqli_fetch_assoc($result)) : ?>
        <tr>
        <td><?php echo $row['user_id']?></td>
        <td><?php echo $row['username']?></td>
        <td><?php echo $row['password']?></td>
        <td><?php echo $row['level']?></td>

        <?php if($_SESSION['level'] > 3) : ?>
        <td><a href="systemuser_edit.php?id=<?php echo $row['user_id']?>">แก้ไข</a></td>
        <?php endif ?>

        <?php if($_SESSION['level'] > 3) : ?>
        <td><a href="systemuser_delete.php?id=<?php echo $row['user_id']?>">ลบ</a></td>
        <?php endif ?>
        </tr>
        <?php endwhile ?>
    </table>
    </center>
<?php } else {
    echo "<center><h3 class='error'>For admin</h3></center>";
} ?> 

    </div>
</body>
</html>