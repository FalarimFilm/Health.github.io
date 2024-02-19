<?php 

require('config.php');
$id= $_GET['id'];
$sql="SELECT * FROM historyBMR WHERE  accountBMR_id = $id";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link type="text/css" rel="stylesheet" href="main.css">
</head>
<body>
    <?php include('nav.php'); ?>
    <br><br>
    <center>
<form action="bmrhistory_edit_submit.php?id=<?php echo $row['accountBMR_id']?>" method="post">
    <table>
        <tr>
            <td>ลำดับ</td>
            <td><input type="number" value="<?php echo $row['accountBMR_id']?>" name="accountBMR_id"> </td>
        </tr>
        <tr>
            <td>ชื่อ</td>
            <td><input type="text" value="<?php echo $row['firstname']?>" name="firstname"> </td>
        </tr>
        <tr>
            <td>นามสกุล</td>
            <td><input type="text" value="<?php echo $row['lastname']?>" name="lastname"> </td>
        </tr>
        <tr>
            <td>เพศ</td>
            <td><input type="text" value="<?php echo $row['gender']?>" name="gender"> </td>
        </tr>
        <tr>
            <td>อายุ</td>
            <td><input type="number" value="<?php echo $row['age']?>" name="age"> </td>
        </tr>
        <tr>
            <td>น้ำหนัก</td>
            <td><input type="number" value="<?php echo $row['weight']?>" name="weight"> </td>
        </tr>
        <tr>
            <td>ส่วนสูง</td>
            <td><input type="number" value="<?php echo $row['height']?>" name="height"> </td>
        </tr>
        <tr>
            <td>กิจกรรม</td>
            <td><input type="text" value="<?php echo $row['activity']?>" name="activity"> </td>
        </tr>
        <tr>
            <td>BMR</td>
            <td><input type="text" value="<?php echo $row['BMR']?>" name="BMR"> </td>
        </tr>
        <tr>
            <td>TDEE</td>
            <td><input type="text" value="<?php echo $row['TDEE']?>" name="TDEE"> </td>
        </tr>
        <tr>
            <td>Standard</td>
            <td><input type="text" value="<?php echo $row['Standard']?>" name="Standard"> </td>
        </tr>
        
    </table>
        <input type="submit">
        </form>
    </center>
</body>
</html>